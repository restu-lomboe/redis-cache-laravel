<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function roleUser()
    {
        return $this->hasMany('App\User');
    }
}
