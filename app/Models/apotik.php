<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apotik extends Model
{
    use HasFactory;

    protected $table ='apotik';

    protected $fillable = [
        'id',
        'kode_obat',
        'nama_obat',
    ];
}
