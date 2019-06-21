@extends('layout.app')
@section('main')
<div class="btn-primary alert">UPDATE DATA PRODUK</div>
<form method="post" action="{{route('produk.update',$produk->id)}}">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="nama">Nama Produk</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk" value="{{$produk->nama}}">
       </div>
    <div class="form-group">
        <label for="qyt">Qty</label>
        <input type="number" class="form-control" id="qyt" name="qty" placeholder="Qty" value="{{$produk->qty}}">
    </div>
    <div class="form-group">
        <label for="harga_beli">Harga beli</label>
        <input type="number" class="form-control" id="harga_beli" name="harga_beli" placeholder="harga beli" value="{{$produk->harga_beli}}">
    </div>
    <div class="form-group">    
        <label for="harga_jual">harga jual</label>
        <input type="number" class="form-control" id="harga_jual" name="harga_jual" placeholder="harga jual" value="{{$produk->harga_jual}}">
    </div>
    <div>
        <label for="harga_jual">Kategori</label>
        <select class="custom-select" name="kategori" value="{{$produk->kategori_id}}">
            @foreach ($kategori as $kt)
                @if ($kt->id === $produk->kategori_id)
                     <option value="{{$kt->id}}" selected>{{$kt->nama_kategori}}</option>
                @else
                     <option value="{{$kt->id}}">{{$kt->nama_kategori}}</option>
                @endif
            @endforeach           
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
@endsection