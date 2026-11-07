@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Daftar Produk Toko</h2>
    <a href="{{ route('products.create') }}" class="btn btn-success">+ Tambah Produk</a>
</div>

@if(session('success'))
    <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
@endif

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <table class="table table-hover mb-0 align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><strong>{{ $product->name }}</strong></td>
                    <td><span class="badge bg-secondary">{{ $product->category }}</span></td>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }} unit</td>
                    <td>
                        <span class="badge {{ $product->is_active ? 'bg-success' : 'bg-danger' }}">
                            {{ $product->is_active ? 'Aktif' : 'Non-Aktif' }}
                        </span>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm text-white">Detail</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm text-white">Ubah</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-4 text-muted">Belum ada data.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
