<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'kode_buku',
        'judul',
        'pengarang',
        'tahun_terbit'
    ];
}
