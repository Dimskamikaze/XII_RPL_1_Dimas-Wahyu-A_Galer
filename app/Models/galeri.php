<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class galeri extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'judul',
        'deskripsi',
        'foto',
        'id_user',
        'tanggal',
    ];
}
