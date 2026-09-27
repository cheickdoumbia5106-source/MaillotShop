@extends('layouts.shop')

@section('title', 'Accueil')

@section('content')

    <div class="rounded-4 text-white text-center p-5 mb-5" style="background: linear-gradient(135deg, #16213e, #0b1120); box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
        <h1 class="fw-bold display-5">⚽ MaillotShop</h1>
        <p class="lead mb-4">Les plus beaux maillots de clubs et de sélections nationales, livrés chez vous.</p>
        <a href="{{ route('products.index') }}" class="btn btn-light btn-lg px-4 fw-semibold">Découvrir la boutique</a>
    </div>

    <h3 class="mb-3 fw-bold">Catégories</h3>
    <div class="row g-3 mb-5">
        @foreach ($categories as $category)
            <div class="col-md-6">
                <a href="{{ route('products.index', ['category' => $category]) }}"
                   class="d-block text-decoration-none text-white rounded-4 py-4 text-center fw-semibold shadow-sm"
                   style="background: linear-gradient(135deg, #1f2b4d, #16213e);">
                    {{ $category }}
                </a>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold mb-0">Maillots populaires</h3>
        <a href="{{ route('products.index') }}" class="small text-decoration-none">Voir tout &rarr;</a>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 mb-5">
        @foreach ($popular as $product)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset($product->image) }}" class="card-img-top" style="height:200px;object-fit:cover;" alt="{{ $product->name }}">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title mb-1">{{ $product->name }}</h6>
                        <p class="fw-bold mb-2" style="color:#16213e;">{{ $product->price }} MAD</p>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-dark mt-auto">Voir</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3 class="mb-3 fw-bold">Nouveautés</h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        @foreach ($newest as $product)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset($product->image) }}" class="card-img-top" style="height:200px;object-fit:cover;" alt="{{ $product->name }}">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title mb-1">{{ $product->name }}</h6>
                        <p class="fw-bold mb-2" style="color:#16213e;">{{ $product->price }} MAD</p>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-dark mt-auto">Voir</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection