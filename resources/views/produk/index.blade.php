@extends('layout.app')
@section('main')
<h1 class="alert alert-primary">Daftar Produk</h1>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Qty</th>
      <th scope="col">Harga Beli</th>
      <th scope="col">Harga Jual</th>
      <th scope="col">Kategori</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @php($no=1)
  @foreach ($produk as $p)
    <tr>
      <th scope="row">{{$no}}</th>
      <td>{{$p->nama}}</td>
      <td>{{$p->qty}}</td>
      <td>{{$p->harga_jual}}</td>
      <td>{{$p->harga_beli}}</td>
      <td>{{$p->kategori->nama_kategori }}</td>
      <td>
        <a href="{{route('produk.edit',$p->id)}}" class="btn btn-primary">Update</a>
        <form class="d-inline" action="{{route('produk.destroy',$p->id)}}" method="post">
          @method('delete')
          @csrf
          <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('yakin menghapus ?')">
        </form>
      </td>
    </tr>
     @php($no++)
  @endforeach
  </tbody>
</table>
<a class="btn btn-primary" href="{{route('produk.create')}}" >Tambah Data</a>
@endsection