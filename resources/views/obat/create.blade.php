@extends('adminlte::page')
@section('title', 'Tambah Data Obat')
@section('content_header')
 <h1 class="m-0 text-dark">Tambah Data Obat</h1>
@stop
@section('content') 
 <form action="{{route('obat.store')}}" method="post">
 @csrf
 <div class="row">
 <div class="col-12">
 <div class="card">
 <div class="card-body">
 <div class="form-group">
 <label for="Nama_Obt">Nama obat</label>
 <input type="text" class="form-control
@error('Nama_Obt') is-invalid @enderror" id="Nama_Dkt"
placeholder="Nama obat" name="Nama_Obt"
value="{{old('Nama_Obt')}}">
 @error('Nama_Obt') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <label for="Jenis_Obt">Jenis Obat</label>
 <input type="text" class="form-control
@error('Jenis_Obt') is-invalid @enderror" id="Jenis_Obt"
placeholder="Jenis obat" name="Jenis_Obt"
value="{{old('Jenis_Obt')}}">
 @error('Jenis_Obt') <span class="textdanger">{{$message}}</span> @enderror
 </div>
  <div class="form-group">
 <label for="Kategori">Kategori</label>
 <input type="text" class="form-control
@error('') is-invalid @enderror" id="Kategori"
placeholder="Kategori" name="Kategori" value="{{old('Kategori')}}">
 @error('Kategori') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Hrg_Obt">Harga obat</label>
 <input type="text" class="form-control
@error('') is-invalid @enderror" id="Hrg_Obt"
placeholder="Harga obat" name="Hrg_Obt"
value="{{old('Hrg_Obt')}}">
 @error('Hrg_Obt') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Jmlh_Obt">Jumlah Obat</label>
 <input type="text" class="form-control
@error('') is-invalid @enderror" id="Jmlh_Obt"
placeholder="Jumlah Obat" name="Jmlh_Obt" value="{{old('Jmlh_Obt')}}">
 @error('Jmlh_Obt') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 </div>
 <div class="card-footer">
 <button type="submit" class="btn btnprimary">Simpan</button>
 <a href="{{route('obat.index')}}" class="btn btn-default">
 Batal
 </a>
 </div>
 </div>
 </div>
 </div>
@stop