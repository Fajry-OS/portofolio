<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'posisi',
        'perusahaan',
        'deskripsi',
        'tgl_mulai',
        'tgl_selesai',
        'tgl_skrg',
    ];
}
