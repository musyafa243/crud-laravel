@extends('layout.main')

@section('title', 'tambah data')

@section('content')
<div class="container mt-5">
        <div class="col-8">
            <h1>Ubah Data Barang</h1>
            <form method="post" action="/koordinar/{{ $koordinar->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama-koor">Nama Koordinator</label>
                    <input type="text" class="form-control @error('nama_koor') is-invalid @enderror" id="nama_koor" placeholder="Masukkan Nama" name="nama_koor" value="{{ $koordinar->nama_koor }}">
                    <div class="invalid-feedback">
                        Tolong Masukkan Nama Koordinator.
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama">Pilih Barang</label>
                    <select name="item_id" class="form-control @error('item_id') is-invalid @enderror">
                        <option selected value="">Pilih</option>
                        @foreach ($item as $it)
                        <option  value="{{$it->id}}"> {{$it->id}} - {{$it->nama}}</option>
                        @endforeach
                      </select>
                      @error ('item_id')<div class="invalin-feedback">{{$message}}</div>@enderror
            </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ $koordinar->alamat }}"></textarea>
                    <div class="invalid-feedback">
                    Tolong Masukkan Alamat.
                    </div>
                </div>
                
                <button class="btn btn-primary" type="submit">Ubah Data</button>
            </form>
        </div>
    </div>
    @endsection