@extends('adminlte::page')
@section('title', 'Tambah Data Dokter')
@section('content_header')
 <h1 class="m-0 text-dark">Tambah Data Dokter</h1>
@stop
@section('content') 
 <form action="{{route('dokter.store')}}" method="post">
 @csrf
 <div class="row">
 <div class="col-12">
 <div class="card">
 <div class="card-body">
 <div class="form-group">
 <label for="Nama_Dkt">Nama Dokter</label>
 <input type="text" class="form-control
@error('bidangstudi') is-invalid @enderror" id="Nama_Dkt"
placeholder="Nama Dokter" name="Nama_Dkt"
value="{{old('Nama_Dkt')}}">
 @error('Nama_Dkt') <span class="textdanger">{{$message}}</span> @enderror
 </div>
  <div class="form-group">
 <label for="Specialis">Specialis</label>
 <input type="text" class="form-control
@error('') is-invalid @enderror" id="Specialis"
placeholder="Specialis" name="Specialis"
value="{{old('Specialis')}}">
 @error('Specialis') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Alamat_Dkt">Alamat Dokter</label>
 <input type="text" class="form-control
@error('') is-invalid @enderror" id="Alamat_Dkt"
placeholder="Alamat Dokter" name="Alamat_Dkt"
value="{{old('Alamat_Dkt')}}">
 @error('Alamat_Dkt') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="No_Telepon_Dkt">No Telepon Dokter</label>
 <input type="text" class="form-control
@error('') is-invalid @enderror" id="No_Telepon_Dkt"
placeholder="No Telepon Dokter" name="No_Telepon_Dkt"
value="{{old('No_Telepon_Dkt')}}">
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