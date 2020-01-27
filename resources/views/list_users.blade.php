@extends('layout/main')

@section('title', 'table')
    
@section('content')
<div class="container mt-3">
    <table class="table table table-striped" id="users-table">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Code</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
            </tr>
        </thead>
    </table>
</div>
@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'user/json',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'nama', name: 'nama' },
            { data: 'code', name: 'code' },
            { data: 'jumlah', name: 'jumlah' },
            { data: null,
                            render: function(data){
                                var view_button = '<a href="/items/' + data.id + '"   class="btn btn-primary" role="button" aria-pressed="true">Detail</a>';
                            
                                return view_button;}
                        },
            
        ]
    });
});
</script>

<div class="container">
    <a href="/koordinar/create" class="btn btn-info my-3">+ Tambah Data Koordinator</a>
</div>
@endpush
