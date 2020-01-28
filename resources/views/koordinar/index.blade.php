@extends('layout/main')

@section('title', 'Table barang')

@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Alamat</th>
        <th scope="col">Keterangan</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($koordinar as $ko)
            <tr>
                <td>{{$ko->id}}</td>
                <td>{{$ko->nama_koor}}</td>
                <td>{{$ko->item->nama}}</td>
                <td>{{$ko->alamat}}</td>
                <td><a href="/koordinar/{{$ko->id}}" class="badge badge-info">detail</a></a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
  <a href="/koordinar/create" class="btn btn-info my-3">+ Tambah Data Koordinator</a>
@endsection