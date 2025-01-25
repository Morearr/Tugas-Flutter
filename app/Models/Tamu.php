<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_tamu',
        'nama_tamu',
        'alamat_tamu',
        'no_telpon',
    ];
}
