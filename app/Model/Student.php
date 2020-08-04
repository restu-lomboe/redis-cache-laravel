<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'fakultas',
        'jurusan',
        'no_hp',
        'no_wa',
        'user_id'
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
