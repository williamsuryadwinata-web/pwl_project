<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'table_dosen';

     protected $fillable = [
        'Fullname',
        'ND',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'Pendidikan_Terakhir',
        'Jurusan',
        'Alamat'
    ];
}