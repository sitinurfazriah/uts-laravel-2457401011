<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Inventaris Toko</title>
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">Toko Berkah</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/">Beranda</a>
                <a class="nav-link" href="{{ route('products.index') }}">Daftar Produk</a>
            </div>
        </div>
    </nav>

    <div class="container my-5 flex-grow-1">
        @yield('content')
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <!-- UBAH TEKS DI BAWAH INI MENJADI NAMA ASLI ANDA -->
        <p class="mb-0">Siti Nurfazriah · 2457401011</p>
    </footer>

</body>
</html>
