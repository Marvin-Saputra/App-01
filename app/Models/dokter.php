<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $table = 'tbl_dokter';
    protected $fillable = [
        'Nama_Dkt',
        'Specialis',
        'Alamat_Dkt',
        'No_Telepon_Dkt'
    ];
}
