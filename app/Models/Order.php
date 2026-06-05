<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_name', 'customer_email', 'total_amount', 'status', 'stripe_session_id'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
