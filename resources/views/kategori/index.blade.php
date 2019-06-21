@extends('layout.app')
@section('main')
<h1 class="alert alert-primary">Daftar kategori</h1>
<form class="form-inline mb-4" action="{{route('kategori.store')}}" method="POST">
        @csrf
  <div class="form-group mr-4">
    <label for="kategori" class="mr-4">Tambah Kategori</label>
    <input type="text" class="form-control" id="kategori" name="kategori"  placeholder="Tambah Kategori">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<table class="table" style="width: 400px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @php($no=1)
  @foreach ($kategori as $kt)
       <tr>
        <th scope="row">{{$no}}</th>
        <td>{{$kt->nama_kategori}}</td>
        <td>
            <form class="d-inline" action="{{route('kategori.destroy',$kt->id)}}" method="post">
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
@endsection