<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jualan</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Jualan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item ">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/produk">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kategori">Tambah Kategori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/pelanggan/create')}}">Tambah Pelanggan</a>
      </li>
       <li class="nav-item">
          <a class="nav-link" href="{{url('/pelanggan')}}">Data Pelanggan</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{url('/penjualan')}}">Penjualan</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{url('/penjualanDetail')}}">Penjualan detail</a>
      </li>
    </ul>
  </div>
</nav>
  <div class="container">
    @yield('main')
  </div>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>
</html>