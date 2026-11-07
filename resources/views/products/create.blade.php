@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-0 mx-auto" style="max-width: 650px;">
    <div class="card-header bg-dark text-white">
        <h5 class="mb-0">Form Tambah Produk Baru</h5>
    </div>
    <div class="card-body p-4">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Produk *</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Kategori Produk *</label>
                <select name="category" class="form-select @error('category') is-invalid @enderror">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Minuman" {{ old('category') == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                    <option value="Makanan Ringan" {{ old('category') == 'Makanan Ringan' ? 'selected' : '' }}>Makanan Ringan</option>
                    <option value="Alat Tulis" {{ old('category') == 'Alat Tulis' ? 'selected' : '' }}>Alat Tulis</option>
                </select>
                @error('category')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="row">
                <div class="col-6 mb-3">
                    <label class="form-label">Harga Barang (Rp) *</label>
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                    @error('price')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label">Jumlah Stok *</label>
                    <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}">
                    @error('stock')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="row">
                <div class="col-6 mb-3">
                    <label class="form-label">Tanggal Masuk *</label>
                    <input type="date" name="received_at" class="form-control @error('received_at') is-invalid @enderror" value="{{ old('received_at') }}">
                    @error('received_at')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label">Berat Produk (Gram)</label>
                    <input type="number" name="weight_gram" class="form-control @error('weight_gram') is-invalid @enderror" value="{{ old('weight_gram') }}">
                    @error('weight_gram')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="is_active" value="1" class="form-check-input" id="activeCheck" {{ old('is_active') ? 'checked' : '' }}>
                <label class="form-check-label" for="activeCheck">Tampilkan Produk ke Toko (Aktif)</label>
            </div>

            <div class="mb-4">
                <label class="form-label">Keterangan / Deskripsi</label>
                <textarea name="description" rows="3" class="form-control">{{ old('description') }}</textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success px-4">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
