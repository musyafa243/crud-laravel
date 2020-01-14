@extends('layout/main')

@section('title', 'Daftar')

@section('container')

<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $daftarbarang as $brg)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $brg->id }}</td>
      <td>{{ $brg->nama }}</td>
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
@endsection