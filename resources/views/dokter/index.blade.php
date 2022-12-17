@extends('adminlte::page')
@section('title', 'Data Dokter')
@section('content_header')
 <h1 class="m-0 text-dark"> Data Dokter</h1>
@stop
@section('content')
 <div class="row">
 <div class="col-12">
 <div class="card">
 <div class="card-body">
 <a href="{{route('dokter.create')}}" class="btn
btn-primary mb-2">
 Tambah
 </a>
 <table class="table table-hover table-bordered
table-stripped" id="example2">
 <thead>
<tr>
 <th>No.</th>
 <th>Nama</th>
 <th>Specialis</th>
 <th>Alamat Dokter</th>
 <th>No Telepon Dokter</th>
 <th>Opsi</th>
 </tr>
</thead>
<tbody>
@foreach($dokter as $key => $bs)
 <tr>
 <td>{{$key+1}}</td>
 <td>{{$bs->Nama_Dkt}}</td>
 <td>{{$bs->Specialis}}</td>
 <td>{{$bs->Alamat_Dkt}}</td>
 <td>{{$bs->No_Telepon_Dkt}}</td>


 <td>
 <a href="{{route('dokter.edit',
$bs)}}" class="btn btn-primary btn-xs">
 Edit
 </a>
<a href="{{route('dokter.destroy',
$bs)}}" onclick="notificationBeforeDelete(event, this)" class="btn btndanger btn-xs">
 Delete
 </a>
 </td>
 </tr>
 @endforeach
</tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
@stop
@push('js')
 <form action="" id="delete-form" method="post">
 @method('delete')
 @csrf
 </form>
 <script>
 $('#example2').DataTable({
 "responsive": true,
 });
 function notificationBeforeDelete(event, el) {
 event.preventDefault();
 if (confirm('Apakah anda yakin akan menghapus data ? ')) {
 $("#delete-form").attr('action', $(el).attr('href'));
 $("#delete-form").submit();
 }
 }
 </script>
@endpush