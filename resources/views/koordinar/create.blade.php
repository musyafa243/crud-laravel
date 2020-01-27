@extends('layout.main')

@section('title', 'tambah data')

@section('content')
<div class="container mt-5">
        <div class="col-8">
            <h1>Tambah Data Koordinator</h1>
            <form method="post" action="/items">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Koordinator</label>
                    <input type="text" class="form-control @error('nama_koor') is-invalid @enderror" id="nama_koor" placeholder="Masukkan Nama Koordinator" name="nama_koor" value="{{old('nama_koor')}}">
                    @error ('nama_koor')<div class="invalin-feedback">{{ $message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nama">Pilih Barang</label>
                    <select name="student_id" class="form-control @error('koordinar_id') is-invalid @enderror">
                        <option selected value="">Pilih</option>
                        @foreach ($koordinars as $koo)
                        <option  value="{{$koo->id}}"> {{$koo->koordinar_id}} - {{$koo->nama_koor}}</option>
                        @endforeach
                      </select>
                      @error ('student_id')<div class="invalin-feedback">{{ $message}}</div>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="jumlah">Alamat</label>
                    <input type="text" class="form-control" id="jumlah" placeholder="Masukkan jumlah" name="jumlah">
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
    @endsection
