@extends('layouts.app')

@section('content')
<div style="height: 100px; background: #1a1a1a;"></div>
<div style="min-height: 80vh; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #1a1a1a 0%, #2a1a3a 50%, #1a1a1a 100%); color: white; padding: 2rem;">
    <div style="text-align: center; background: #2d2d2d; padding: 4rem; border-radius: 30px; border: 2px solid #e74c3c; box-shadow: 0 20px 50px rgba(231, 76, 60, 0.2);">
        <i class="fa-solid fa-circle-xmark" style="font-size: 5rem; color: #e74c3c; margin-bottom: 2rem;"></i>
        <h1 style="font-family: var(--font-serif); font-size: 3rem; margin-bottom: 1rem;">Paiement Annulé</h1>
        <p style="color: #bbb; font-size: 1.2rem; margin-bottom: 2rem;">Le processus de paiement a été interrompu. Votre panier est toujours enregistré.</p>
        <a href="/menu" style="background: #e74c3c; color: white; padding: 15px 40px; border-radius: 30px; text-decoration: none; font-weight: bold; font-size: 1.1rem;">Réessayer</a>
    </div>
</div>
@endsection
