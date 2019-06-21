@extends('layout.app')
@section('main')
<div class="btn-primary alert">MASUKAN DATA PRODUK</div>
<form method="post" action="{{route('produk.store')}}">
        @csrf
    <div class="form-group">
        <label for="nama">Nama Produk</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk">
       </div>
    <div class="form-group">
        <label for="qyt">Qty</label>
        <input type="number" class="form-control" id="qyt" name="qty" placeholder="Qty">
    </div>
    <div class="form-group">
        <label for="harga_beli">Harga beli</label>
        <input type="number" class="form-control" id="harga_beli" name="harga_beli" placeholder="harga beli">
    </div>
    <div class="form-group">
        <label for="harga_jual">harga jual</label>
        <input type="number" class="form-control" id="harga_jual" name="harga_jual" placeholder="harga jual">
    </div>
    <div>
        <label for="harga_jual">Kategori</label>
        <select class="custom-select" name="kategori">
            <option selected>Pilih Kategori Produk</option>
            @foreach ($kategori as $kt)
                <option value="{{$kt->id}}">{{$kt->nama_kategori}}</option>
            @endforeach           
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
@endsection