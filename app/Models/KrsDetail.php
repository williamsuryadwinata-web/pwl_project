<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KrsDetail extends Model
{
    protected $table = 'krs_details';

    protected $fillable = [
        'kode_krs',
        'kode_kelas',
        'status'
    ];
}

