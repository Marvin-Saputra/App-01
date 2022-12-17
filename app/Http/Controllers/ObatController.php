<?php

namespace App\Http\Controllers;
use App\Models\obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = obat::all();
        return view('obat.index', [
            'obat' => $obat
        ]);
    }

    public function create()
    {
    //Menampilkan Form Tambah Bidang Studi
    return view('obat.create');
    }
    public function store(Request $request)
    {
    //Menyimpan Data Bidang Studi
    $request->validate([
   //  'obat' => 'required|unique:obat,obat'
   'Nama_Obt' => 'required',
   'Jenis_Obt' => 'required',
   'Kategori' => 'required',
   'Hrg_Obt' => 'required',
   'Jmlh_Obt' => 'required',
   
    ]);
    $array = $request->only([
    'Nama_Obt', 'Jenis_Obt', 'Kategori', 'Hrg_Obt', 'Jmlh_Obt'
    ]);
    $obat = obat::create($array);
    return redirect()->route('obat.index')
    ->with('success_message', 'Berhasil menambah data obat baru');
    } 
   
    public function edit($id)
    {
    //Menampilkan Form Edit
    $obat = obat::find($id);
    if (!$obat) return redirect()->route('obat.index') 
    ->with('error_message', 'Data obat dengan id = '.$id.' tidak
   ditemukan');
    return view('obat.edit', [
    'obat' => $obat
    ]);
    }
    public function update(Request $request, $id)
    {
    //Mengedit Data Bidang Studi
    $request->validate([
    'Nama_Obt' =>'required',
    'Jenis_Obt' => 'required',
    'Kategori' => 'required',
    'Hrg_Obt' => 'required',
    'Jmlh_Obt' => 'required'
    ]);
    $obat = obat::find($id);
    $obat->Nama_Obt = $request->Nama_Obt;
    $obat->Jenis_Obt = $request->Jenis_Obt;
    $obat->Kategori = $request->Kategori;
    $obat->Hrg_Obt = $request->Hrg_Obt;
    $obat->Jmlh_Obt = $request->Jmlh_Obt;
    $obat->save();
    return redirect()->route('obat.index')
    ->with('success_message', 'Berhasil mengubah data Obat');
    } 
    public function destroy(Request $request, $id)
    {
    //Menghapus Bidang Studi
    $obat = obat::find($id);
    if ($obat) $obat->delete();
    return redirect()->route('obat.index')
    ->with('success_message', 'Berhasil menghapus Data obat');
    } 
}
