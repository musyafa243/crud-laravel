@extends('layout/main')

@section('title', 'table')
    
@section('content')
<div class="container mt-3">
    <table class="table table table-striped" id="users-table">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
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
            { data: 'jumlah', name: 'jumlah' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            { data: null,
                            render: function(data){
                                var view_button = '<a class="btn btn-primary" role="button" aria-pressed="true">Detail</a>';
                            
                                return view_button;}
                        },
            
        ]
    });
});
</script>
@endpush