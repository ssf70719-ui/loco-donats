<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $cart = $request->input('cart');
        if (empty($cart)) {
            return response()->json(['error' => 'Cart is empty'], 400);
        }

        $stripeSecret = config('services.stripe.secret');
        $isPlaceholder = str_contains($stripeSecret ?? '', 'placeholder');

        $totalAmount = 0;
        foreach ($cart as $item) {
            $totalAmount += $item['price'] * $item['qty'];
        }

        // If using placeholder keys, simulate a successful Stripe session creation
        if ($isPlaceholder) {
            $order = Order::create([
                'total_amount' => $totalAmount,
                'status' => 'pending', // Will be set to paid in success
                'stripe_session_id' => 'demo_' . uniqid(),
            ]);

            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_name' => $item['name'],
                    'quantity' => $item['qty'],
                    'price' => $item['price'],
                ]);
            }

            return response()->json(['id' => 'demo', 'is_demo' => true]);
        }

        try {
            Stripe::setApiKey($stripeSecret);

            $lineItems = [];
            foreach ($cart as $item) {
                $lineItems[] = [
                    'price_data' => [
                        'currency' => 'mad',
                        'product_data' => [
                            'name' => $item['name'],
                        ],
                        'unit_amount' => $item['price'] * 100,
                    ],
                    'quantity' => $item['qty'],
                ];
            }

            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => $lineItems,
                'mode' => 'payment',
                'success_url' => route('checkout.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('checkout.cancel'),
            ]);

            $order = Order::create([
                'total_amount' => $totalAmount,
                'status' => 'pending',
                'stripe_session_id' => $session->id,
            ]);

            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_name' => $item['name'],
                    'quantity' => $item['qty'],
                    'price' => $item['price'],
                ]);
            }

            return response()->json(['id' => $session->id]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function success(Request $request)
    {
        $sessionId = $request->get('session_id');
        
        // Handle Demo mode success
        if ($request->get('mode') === 'demo') {
            return view('checkout.success');
        }

        if ($sessionId) {
            $order = Order::where('stripe_session_id', $sessionId)->first();
            if ($order) {
                $order->update(['status' => 'paid']);
            }
        }

        return view('checkout.success');
    }

    public function cancel()
    {
        return view('checkout.cancel');
    }
}
