@extends('layout/main')

@section('title', 'Detail')

@section('container')

<div class="container">
<div class="row">
<div class="col-6">
<h1 class="mt-3">Detail Barang</h1>



<div class="card" >
  <div class="card-body">
    <h5 class="card-title">{{ $item->nama }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Code Barang : {{ $item->code }}</h6>
    <p class="card-text">Jumlah Barang : {{ $item->jumlah }}</p>

     <a href="{{ $item->id }}/edit" class="btn btn-primary">Edit</a>

    <form action="{{$item->id}}" method="post" class="d-inline">
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
  </div>
</div>

</div>
</div>
</div>
@endsection