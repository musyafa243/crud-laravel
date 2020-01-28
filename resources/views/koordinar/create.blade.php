@extends('layout.main')

@section('title', 'tambah data')

@section('content')
<div class="container mt-5">
        <div class="col-8">
            <h1>Tambah Data Koordinator</h1>
            <form method="post" action="/koordinar">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Koordinator</label>
                    <input type="text" class="form-control @error('nama_koor') is-invalid @enderror" id="nama_koor" placeholder="Masukkan Nama Koordinator" name="nama_koor" value="{{old('nama_koor')}}">
                    @error ('nama_koor')<div class="invalin-feedback">{{ $message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nama">Pilih Barang</label>
                    <select name="item_id" class="form-control @error('item_id') is-invalid @enderror">
                        <option selected value="">Pilih</option>
                        @foreach ($koordinars as $koo)
                        <option  value="{{$koo->id}}"> {{$koo->item->id}} - {{$koo->item->nama}}</option>
                        @endforeach
                      </select>
                      @error ('item_id')<div class="invalin-feedback">{{ $message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat"></textarea>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
    @endsection
