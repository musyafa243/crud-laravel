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

     <a href="{{ $item->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
     <a href="#" class="btn btn-danger btn-sm destroy" item-id="{{$item->id}}">Delete</a>
  </div>
</div>
</div>
</div>
</div>
@endsection
@section('footer')
    <script>
      $('.destroy').click(function(){
         var item_id = $(this).attr('item-id')
         swal({
           title: "Anda Yakin ?",
           text: "Mau dihapus data barang dengan id "+item_id+" ??",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           console.log(willDelete);
          if (willDelete){
              window.location = "/items/"+item_id+"/destroy";
          }
         });
      })
    </script>
@endsection