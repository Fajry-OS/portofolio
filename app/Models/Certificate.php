<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $table = 'certificates';
    protected $fillable = [
        'nama_sertifikat',
        'penyelenggara',
        'tgl_sertfikat',
        'gambar',
    ];
}
