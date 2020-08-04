<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use App\user;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'role_id' => request('role_id'),
            'password' => bcrypt(request('password'))
        ]);

        return response('Thanks, Anda Berhasil Registrasi');
    }
}
