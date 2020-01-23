@extends('layout.main')

@section('title', 'tambah data')

@section('content')
<div class="container mt-5">
        <div class="col-8">
            <h1>Tambah Data Barang</h1>
            <form method="post" action="/items">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
                    <div class="invalid-feedback">
                        Tolong Masukkan Nama Barang.
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama">Code Barang</label>
                    <input type="text" class="form-control @error('code') is-invalid @enderror" id="nama" placeholder="Masukkan code" name="code" value="{{old('code')}}">
                    <div class="invalid-feedback">
                    Tolong Masukkan Code Barang
                    </div>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah Barang</label>
                    <input type="text" class="form-control" id="jumlah" placeholder="Masukkan jumlah" name="jumlah">
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
    @endsection
