@extends('layout/main')

@section('title', 'Daftar')

@section('container')
<div class="container">
<div class="row">
<div class="col-10">
<h1 class="mt-3">Daftar Barang</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Code Barang</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $daftarbarang as $brg)
    <tr>
      <td>{{ $brg->id }}</td>
      <td>{{ $brg->nama }}</td>
      <td>{{ $brg->code }}</td>
      <td>{{ $brg->jumlah }}</td>
      <td>
        <a href="" class="badge badge-success">edit</a>
        <a href="" class="badge badge-danger">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection