@extends('layout/main')

@section('title', 'Detail')

@section('container')

<div class="container">
<div class="row">
<div class="col-7">
<h1 class="mt-3">Detail Barang</h1>

@if (session('status'))
<div class="alert alert-success">
  {{ session('status')}}
</div>
@endif 

<ul class="list-group">

@foreach($items as $items)
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $items->nama }}
    <a href="/items/{{$items->id}}" class="badge badge-info">detail</a>
  </li>
@endforeach
</ul>
<a href="/items/create" class="btn btn-info my-3">+ Tambah Data Barang</a>
</div>
</div>
</div>
@endsection