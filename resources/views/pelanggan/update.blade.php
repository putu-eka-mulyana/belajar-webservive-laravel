@extends('layout.app')
@section('main')
    <form action="{{route('pelanggan.update',$pelanggan->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama pelanggan</label>
            <input type="text" id="nama" name="nama_pelanggan" placeholder="Nama Pelanggan" class="form-control" value="{{$pelanggan->nama_pelanggan}}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat" >{{$pelanggan->alamat}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">simpan</button>
    </form>
@endsection