@extends('layouts.admin')

@section('title', 'Gestion des produits')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Gestion des maillots</h2>
        <a href="{{ route('admin.products.create') }}" class="btn btn-dark">+ Ajouter un maillot</a>
    </div>

    <table class="table align-middle bg-white">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Nom</th>
                <th>Équipe</th>
                <th>Prix</th>
                <th>Stock</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td><img src="{{ asset($product->image) }}" style="width:50px;height:50px;object-fit:cover;" class="rounded"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->team }}</td>
                    <td>{{ $product->price }} MAD</td>
                    <td>
                        <span class="badge bg-{{ $product->stock > 0 ? 'success' : 'danger' }}">{{ $product->stock }}</span>
                    </td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-outline-dark">Modifier</a>
                        <form method="POST" action="{{ route('admin.products.destroy', $product) }}" onsubmit="return confirm('Supprimer ce maillot ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>{{ $products->links() }}</div>

@endsection