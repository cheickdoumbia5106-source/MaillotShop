@extends('layouts.admin')

@section('title', 'Ajouter un maillot')

@section('content')

    <h2 class="fw-bold mb-4">Ajouter un maillot</h2>

    <div class="card shadow-sm" style="max-width:650px;">
        <div class="card-body p-4">
            <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nom du maillot</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Équipe</label>
                    <input type="text" name="team" value="{{ old('team') }}" class="form-control" required>
                    @error('team') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Catégorie</label>
                    <select name="category" class="form-select" required>
                        <option value="Club" {{ old('category') == 'Club' ? 'selected' : '' }}>Club</option>
                        <option value="Sélection nationale" {{ old('category') == 'Sélection nationale' ? 'selected' : '' }}>Sélection nationale</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label">Prix (MAD)</label>
                        <input type="number" step="0.01" name="price" value="{{ old('price') }}" class="form-control" required>
                        @error('price') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">Taille</label>
                        <select name="size" class="form-select" required>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" value="{{ old('stock', 0) }}" class="form-control" required>
                    @error('stock') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                    @error('image') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-dark px-4">Enregistrer</button>
                <a href="{{ route('admin.products.index') }}" class="btn btn-link">Annuler</a>
            </form>
        </div>
    </div>

@endsection