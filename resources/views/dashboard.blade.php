@extends('layout/main')

@section('title', 'dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <p>Selamat Datang, </p> 
                    <my-button text="My New Text Button" type="submit"></my-button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection