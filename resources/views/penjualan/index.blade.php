@extends('layout.app')
@section('main')
    <h2>Data Penjualan</h2>
     <form action="{{route('penjualan.store')}}" method="post">
        @csrf
        <div>
        <label for="nama_pelanggan">Nama Pelanggan</label>
        <select class="custom-select" name="pelanggan">
            @foreach ($pelanggan as $pl)
                <option value="{{$pl->id}}">{{$pl->nama_pelanggan}}</option>  
            @endforeach  
        </select>
    </div>
        <button type="submit" class="btn btn-primary mt-3">Tambahkan</button>
    </form>

    <table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">tanggal</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php($no=1)
        @foreach ($penjualan as $pj)
        <tr>
            <th scope="row">{{$no}}</th>
            <td>{{$pj->id}}</td>
            <td>{{$pj->pelanggan->nama_pelanggan}}</td>
            <td>{{$pj->tanggal}}</td>
            <td>
                {{-- <a href="{{route('penjualan.edit',$pj->id)}}" class="btn btn-primary">Update</a> --}}
                <form class="d-inline" action="{{route('penjualan.destroy',$pj->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Hapus" class="btn btn-danger"
                        onclick="return confirm('yakin menghapus ?')">
                </form>
            </td>
        </tr>
        @php($no++)
        @endforeach
    </tbody>
@endsection