@extends('layouts.shop')

@section('title', $product->name)

@section('content')

    <div class="row g-4">
        <div class="col-md-6">
            <div class="bg-white rounded-4 shadow-sm p-3">
                <img src="{{ asset($product->image) }}" class="img-fluid rounded-4 w-100" style="object-fit:cover; max-height:500px;" alt="{{ $product->name }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                <h2 class="fw-bold">{{ $product->name }}</h2>
                <p class="text-muted">{{ $product->team }} &middot; {{ $product->category }}</p>
                <h3 class="fw-bold my-3" style="color:#16213e;">{{ $product->price }} MAD</h3>
                <p>{{ $product->description }}</p>

                <div class="d-flex gap-2 mb-4">
                    <span class="badge rounded-pill bg-light text-dark border">Taille : {{ $product->size }}</span>
                    <span class="badge rounded-pill bg-{{ $product->stock > 0 ? 'success' : 'danger' }}">
                        {{ $product->stock > 0 ? 'En stock (' . $product->stock . ')' : 'Rupture de stock' }}
                    </span>
                </div>

                <form method="POST" action="{{ route('cart.add', $product) }}">
                    @csrf
                    <div class="row g-2 align-items-end">
                        <div class="col-auto">
                            <label class="form-label small">Quantité</label>
                            <input type="number" name="quantity" value="1" min="1" max="{{ $product->stock }}" class="form-control" style="width:100px;">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-dark px-4" {{ $product->stock == 0 ? 'disabled' : '' }}>
                                Ajouter au panier
                            </button>
                        </div>
                    </div>
                </form>

                <a href="{{ route('products.index') }}" class="btn btn-link mt-3 ps-0">&larr; Retour au catalogue</a>
            </div>
        </div>
    </div>

@endsection