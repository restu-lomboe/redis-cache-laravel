<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BorrowingBook extends Model
{
    protected $fillable = [
        'tanggal_peminjaman',
        // 'tanggal_pengembalian',
        'tanggal_dateline',
        // 'status_ontime',
        'user_id',
        'kode_buku'
    ];

    public function book()
    {
        return $this->hasMany('App\Model\Book');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
