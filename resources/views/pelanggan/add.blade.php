@extends('layout.app')
@section('main')
    <form action="{{route('pelanggan.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">Nama pelanggan</label>
            <input type="text" id="nama" name="nama_pelanggan" placeholder="Nama Pelanggan" class="form-control">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">simpan</button>
    </form>
@endsection