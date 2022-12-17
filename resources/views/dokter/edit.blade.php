@extends('adminlte::page')
@section('title', 'Update Data Dokter')
@section('content_header')
 <h1 class="m-0 text-dark">Edit Data Dokter</h1>
@stop
@section('content')
 <form action="{{route('dokter.update', $dokter)}}" method="post">
 @method('PUT')
 @csrf
 <div class="row">
 <div class="col-12">
 <div class="card">
 <div class="card-body">

 <div class="form-group">
 <label for="Nama_Dkt">Nama Dokter</label>
 <input type="text" class="form-control
@error('Nama_Dkt') is-invalid @enderror" id="Nama_Dkt"
placeholder="Nama Dokter" name="Nama_Dkt" value="{{$dokter->Nama_Dkt ?? old('Nama_Dkt')}}">
 @error('Nama_Dkt') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Specialis">Specialis</label>
 <input type="text" class="form-control
@error('Specialis') is-invalid @enderror" id="Specialis"
placeholder="Nama Dokter" name="Specialis" value="{{$dokter->Specialis ?? old('Specialis')}}">
 @error('Specialis') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Alamat_Dkt">Alamat Dokter</label>
 <input type="text" class="form-control
@error('Alamat_Dkt') is-invalid @enderror" id="Alamat_Dkt"
placeholder="Alamat Dokter" name="Alamat_Dkt" value="{{$dokter->Alamat_Dkt ?? old('Alamat_Dkt')}}">
 @error('Alamat_Dkt') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="No_Telepon_Dkt">No Alamat Dokter</label>
 <input type="text" class="form-control
@error('No_Telepon_Dkt') is-invalid @enderror" id="No_Telepon_Dkt"
placeholder="Alamat Dokter" name="No_Telepon_Dkt" value="{{$dokter->No_Telepon_Dkt ?? old('No_Telepon_Dkt')}}">
 @error('No_Telepon_Dkt') <span class="textdanger">{{$message}}</span> @enderror
 </div>

 </div>
 <div class="card-footer">
 <button type="submit" class="btn btnprimary">Simpan</button>
 <a href="{{route('dokter.index')}}" class="btn
btn-default">
 Batal
 </a>
 </div>
 </div>
 </div>
 </div>
@stop