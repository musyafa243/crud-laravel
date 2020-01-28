@extends('layout/main')

@section('title', 'Detail')

@section('container')

<div class="container">
<div class="row">
<div class="col-6">
<h1 class="mt-3">Detail Barang</h1>

<div class="card" >
  <div class="card-body">
    <h5 class="card-title">Nama Koordinator : {{ $koordinar->nama_koor }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Alamat : {{ $koordinar->alamat }}</h6>
    <p>Nama Barang : {{ $koordinar->item->nama }}</p>

     <a href="{{ $koordinar->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
     <a href="#" class="btn btn-danger btn-sm destroy" koordinar-id="{{$koordinar->id}}">Delete</a>
  </div>
</div>
</div>
</div>
</div>
@endsection
@section('footer')
    <script>
      $('.destroy').click(function(){
         var koordinar_id = $(this).attr('koordinar-id')
         swal({
           title: "Anda Yakin ?",
           text: "Mau dihapus data barang dengan id "+koordinar_id+" ??",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           console.log(willDelete);
          if (willDelete){
              window.location = "/koordinar/"+koordinar_id+"/destroy";
          }
         });
      })
    </script>
@endsection