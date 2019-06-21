@extends('layout.app')
@section('main')
   <form method="post" action="{{route('penjualanDetail.store')}}">
        @csrf
    <div class="form-group">
        <label for="nama">Nama Produk</label>
        <select class="custom-select" name="produk_id">
            <option selected>Pilih Kategori Produk</option>
            @foreach ($produk as $p)
                <option value="{{$p->id}}">{{$p->nama}}</option>
            @endforeach           
        </select>
       </div>
       <div class="form-group">
        <label for="nama">penjualan ID</label>
        <select class="custom-select" name="penjualan_id">
            <option selected>Pilih Kategori Produk</option>
            @foreach ($penjualan as $p)
                <option value="{{$p->id}}">{{$p->id}}</option>
            @endforeach           
        </select>
       </div>
    <div class="form-group">
        <label for="jumlah">jumlah</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah">
    </div>
    <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
@endsection