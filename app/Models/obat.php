<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    protected $table = 'tbl_obat';
    protected $fillable = [
        'Nama_Obt',
        'Jenis_Obt',
        'Kategori',
        'Hrg_Obt',
        'Jmlh_Obt'
    ];

}
