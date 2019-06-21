@extends('layout.app')
@section('main')
<h1>Daftar Pelanggan</h1>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php($no=1)
        @foreach ($pelanggan as $kt)
        <tr>
            <th scope="row">{{$no}}</th>
            <td>{{$kt->nama_pelanggan}}</td>
            <td>{{$kt->alamat}}</td>
            <td>
                <a href="{{route('pelanggan.edit',$kt->id)}}" class="btn btn-primary">Update</a>
                <form class="d-inline" action="{{route('pelanggan.destroy',$kt->id)}}" method="post">
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
</table>
@endsection