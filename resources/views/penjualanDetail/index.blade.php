@extends('layout.app')
@section('main')
<a href="/penjualanDetail/create" class="btn btn-danger mt-3">tambah penjualan detail</a>
<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Pelanggan</th>
            <th scope="col">produk</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php($no=1)
        @foreach ($data as $p)
        <tr>
            <th scope="row">{{$no}}</th>
            <td>{{$p->penjualan->pelanggan->nama_pelanggan}}</td>
            <td>{{$p->produk->nama}}</td>
            <td>{{$p->jumlah}}</td>
            <td>
                <form class="d-inline" action="{{route('penjualanDetail.destroy',$p->id)}}" method="post">
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