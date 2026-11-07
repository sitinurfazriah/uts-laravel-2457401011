@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-0 mx-auto" style="max-width: 650px;">
    <div class="card-header bg-dark text-white">
        <h5 class="mb-0">Form Ubah Data Produk</h5>
    </div>
    <div class="card-body p-4">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Produk *</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}">
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Kategori Produk *</label>
                <select name="category" class="form-select @error('category') is-invalid @enderror">
                    <option value="Minuman" {{ old('category', $product->category) == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                    <option value="Makanan Ringan" {{ old('category', $product->category) == 'Makanan Ringan' ? 'selected' : '' }}>Makanan Ringan</option>
                    <option value="Alat Tulis" {{ old('category', $product->category) == 'Alat Tulis' ? 'selected' : '' }}>Alat Tulis</option>
                </select>
                @error('category')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="row">
                <div class="col-6 mb-3">
                    <label class="form-label">Harga Barang (Rp) *</label>
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $product->price) }}">
                    @error('price')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label">Jumlah Stok *</label>
                    <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $product->stock) }}">
                    @error('stock')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="row">
                <div class="col-6 mb-3">
                    <label class="form-label">Tanggal Masuk *</label>
                    <input type="date" name="received_at" class="form-control @error('received_at') is-invalid @enderror" value="{{ old('received_at', $product->received_at) }}">
                    @error('received_at')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label">Berat Produk (Gram)</label>
                    <input type="number" name="weight_gram" class="form-control @error('weight_gram') is-invalid @enderror" value="{{ old('weight_gram', $product->weight_gram) }}">
                    @error('weight_gram')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="is_active" value="1" class="form-check-input" id="activeCheck" {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
                <label class="form-check-label" for="activeCheck">Tampilkan Produk ke Toko (Aktif)</label>
            </div>

            <div class="mb-4">
                <label class="form-label">Keterangan / Deskripsi</label>
                <textarea name="description" rows="3" class="form-control">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-warning text-white px-4">Perbarui Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
