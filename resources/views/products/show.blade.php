@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-0 mx-auto" style="max-width: 600px;">
    <div class="card-header bg-dark text-white">
        <h5 class="mb-0">Informasi Rinci Produk</h5>
    </div>
    <div class="card-body p-4">
        <table class="table table-bordered bg-light">
            <tr><th width="35%">Nama Barang</th><td>{{ $product->name }}</td></tr>
            <tr><th>Kategori</th><td><span class="badge bg-secondary">{{ $product->category }}</span></td></tr>
            <tr><th>Harga Unit</th><td>Rp {{ number_format($product->price, 0, ',', '.') }}</td></tr>
            <tr><th>Ketersediaan Stok</th><td>{{ $product->stock }} unit</td></tr>
            <tr><th>Tanggal Masuk</th><td>{{ date('d-m-Y', strtotime($product->received_at)) }}</td></tr>
            <tr><th>Berat Bersih</th><td>{{ $product->weight_gram ?? '0' }} gram</td></tr>
            <tr><th>Status Penjualan</th><td>
                <span class="badge {{ $product->is_active ? 'bg-success' : 'bg-danger' }}">
                    {{ $product->is_active ? 'Aktif Jual' : 'Gudang (Non-Aktif)' }}
                </span>
            </td></tr>
            <tr><th>Catatan Deskripsi</th><td>{{ $product->description ?? '-' }}</td></tr>
        </table>
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning text-white">Modifikasi Data</a>
        </div>
    </div>
</div>
@endsection
