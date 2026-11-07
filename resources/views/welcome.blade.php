@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm border text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Sistem Inventaris Toko Berkah</h1>
        <p class="col-md-8 mx-auto fs-4 text-muted">Aplikasi praktis untuk memantau data inventaris produk, mulai dari makanan ringan, minuman segar, hingga alat tulis secara terorganisir.</p>
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg px-4 mt-3">Masuk ke Daftar Data</a>
    </div>
</div>
@endsection
