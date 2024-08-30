<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'pendidikan',
        'jurusan',
        'gpa',
        'tgl_mulai',
        'tgl_selesai',
    ];
    protected $table = 'educations';
}
