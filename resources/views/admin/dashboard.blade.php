@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <h2 class="fw-bold mb-4">Tableau de bord</h2>

    <div class="row g-3">
        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <p class="text-muted small mb-1">👕 Produits</p>
                    <h3 class="fw-bold mb-0">{{ $totalProducts }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <p class="text-muted small mb-1">👤 Clients</p>
                    <h3 class="fw-bold mb-0">{{ $totalUsers }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <p class="text-muted small mb-1">📦 Commandes</p>
                    <h3 class="fw-bold mb-0">{{ $totalOrders }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm h-100" style="background: linear-gradient(135deg, #16213e, #0b1120); color:white;">
                <div class="card-body">
                    <p class="small mb-1 opacity-75">💰 Chiffre d'affaires</p>
                    <h3 class="fw-bold mb-0">{{ $totalRevenue }} MAD</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-warning rounded-4 mt-4 d-flex align-items-center gap-2">
        ⏳ <span>{{ $pendingOrders }} commande(s) en attente de traitement.</span>
    </div>

@endsection