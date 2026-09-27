@extends('layouts.shop')

@section('title', 'Boutique')

@section('content')

    <h2 class="fw-bold mb-4">Notre boutique</h2>

    <form method="GET" action="{{ route('products.index') }}" class="row g-2 mb-4 bg-white p-3 rounded-4 shadow-sm">
        <div class="col-md-5">
            <input type="text" name="search" class="form-control" placeholder="Rechercher un maillot ou une équipe..." value="{{ request('search') }}">
        </div>
        <div class="col-md-3">
            <select name="category" class="form-select">
                <option value="">Toutes catégories</option>
                <option value="Club" @selected(request('category') == 'Club')>Club</option>
                <option value="Sélection nationale" @selected(request('category') == 'Sélection nationale')>Sélection nationale</option>
            </select>
        </div>
        <div class="col-md-2">
            <select name="size" class="form-select">
                <option value="">Toutes tailles</option>
                <option value="S" @selected(request('size') == 'S')>S</option>
                <option value="M" @selected(request('size') == 'M')>M</option>
                <option value="L" @selected(request('size') == 'L')>L</option>
                <option value="XL" @selected(request('size') == 'XL')>XL</option>
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-dark w-100">Filtrer</button>
        </div>
    </form>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @forelse ($products as $product)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset($product->image) }}" class="card-img-top" style="height:220px;object-fit:cover;" alt="{{ $product->name }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title mb-1">{{ $product->name }}</h5>
                        <p class="text-muted small mb-2">{{ $product->team }}</p>
                        <p class="fw-bold mb-3" style="color:#16213e;">{{ $product->price }} MAD</p>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-outline-dark mt-auto">Voir détails</a>
                    </div>
                </div>
            </div>
        @empty
            <p>Aucun maillot trouvé.</p>
        @endforelse
    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $products->links() }}
    </div>

@endsection