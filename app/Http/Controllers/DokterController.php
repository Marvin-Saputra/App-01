<?php

namespace App\Http\Controllers;
use App\Models\dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = dokter::all();
        return view('dokter.index', [
            'dokter' => $dokter
        ]);
    }

        public function create()
    {
    //Menampilkan Form Tambah Bidang Studi
    return view('dokter.create');
    }
    public function store(Request $request)
    {
    //Menyimpan Data Bidang Studi
    $request->validate([
    //  'dokter' => 'required|unique:dokter,dokter'
    'Nama_Dkt' => 'required',
    'Specialis' => 'required',
    'Alamat_Dkt' => 'required',
    'No_Telepon_Dkt' => 'required'

    ]);
    $array = $request->only([
    'Nama_Dkt', 'Specialis','Alamat_Dkt','No_Telepon_Dkt'
    ]);
    $dokter = dokter::create($array);
    return redirect()->route('dokter.index')
    ->with('success_message', 'Berhasil menambah bidang studi
    baru');
    } 

    public function edit($id)
    {
    //Menampilkan Form Edit
    $dokter = dokter::find($id);
    if (!$dokter) return redirect()->route('dokter.index') 
    ->with('error_message', 'Data Dokter dengan id = '.$id.' tidak
    ditemukan');
    return view('dokter.edit', [
    'dokter' => $dokter
    ]);
    }
    public function update(Request $request, $id)
    {
    //Mengedit Data Bidang Studi
    $request->validate([
    'Nama_Dkt' =>'required',
    'Specialis' => 'required',
    'Alamat_Dkt' => 'required',
    'No_Telepon_Dkt' => 'required'
    ]);
    $dokter = dokter::find($id);
    $dokter->Nama_Dkt = $request->Nama_Dkt;
    $dokter->Specialis = $request->Specialis;
    $dokter->Alamat_Dkt = $request->Alamat_Dkt;
    $dokter->No_Telepon_Dkt = $request->No_Telepon_Dkt;
    $dokter->save();
    return redirect()->route('dokter.index')
    ->with('success_message', 'Berhasil mengubah bidang studi');
    } 

    public function destroy(Request $request, $id)
    {
    //Menghapus Bidang Studi
    $dokter = dokter::find($id);
    if ($dokter) $dokter->delete();
    return redirect()->route('dokter.index')
    ->with('success_message', 'Berhasil menghapus Data Dokter');
    } 
    }


