@extends('adminlte::page')
@section('title', 'Update Data Obat')
@section('content_header')
 <h1 class="m-0 text-dark">Edit Data Obat</h1>
@stop
@section('content')
 <form action="{{route('obat.update', $obat)}}" method="post">
 @method('PUT')
 @csrf
 <div class="row">
 <div class="col-12">
 <div class="card">
 <div class="card-body">
 <div class="form-group">
 <label for="Nama_Obt">Nama Obat</label>
 <input type="text" class="form-control
@error('Nama_Obt') is-invalid @enderror" id="Nama_Obt"
placeholder="Nama Obat" name="Nama_Obt" value="{{$dokter->Nama_Obt ?? old('Nama_Obt')}}">
 @error('Nama_Obt') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Jenis_Obt">Jenis Obat</label>
 <input type="text" class="form-control
@error('Jenis_Obt') is-invalid @enderror" id="Jenis_Obt"
placeholder="Jenis Obat" name="Jenis_Obt" value="{{$dokter->Jenis_Obt ?? old('Jenis_Obt')}}">
 @error('Jenis_Obt') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Kategori">Kategori Obat</label>
 <input type="text" class="form-control
@error('Kategori') is-invalid @enderror" id="Kategori"
placeholder="Kategori Obat" name="Kategori" value="{{$dokter->Kategori ?? old('Kategori')}}">
 @error('Kategori') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Hrg_Obt">Harga Obat</label>
 <input type="text" class="form-control
@error('Hrg_Obt') is-invalid @enderror" id="Hrg_Obt"
placeholder="Harga Obat" name="Hrg_Obt" value="{{$dokter->Hrg_Obt ?? old('Hrg_Obt')}}">
 @error('Hrg_Obt') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Jmlh_Obt">Jumlah Obat</label>
 <input type="text" class="form-control
@error('Jmlh_Obt') is-invalid @enderror" id="Jmlh_Obt"
placeholder="Jumlah Obat" name="Jmlh_Obt" value="{{$dokter->Jmlh_Obt ?? old('Jmlh_Obt')}}">
 @error('Jmlh_Obt') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 </div>
 <div class="card-footer">
 <button type="submit" class="btn btnprimary">Simpan</button>
 <a href="{{route('obat.index')}}" class="btn
btn-default">
 Batal
 </a>
 </div>
 </div>
 </div>
 </div>
@stop