<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'table_matakuliah';

     protected $fillable = [
        'Jurusan',
        'KodeMK',
        'NamaMK'
    ];
}