<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {

        if(!$token = auth()->attempt($request->only('email', 'password')))
        {
            return response(null, 401);
        }

        return response()->json(compact('token'));

    }

    public function logout()
    {
        auth()->logout();
    }
}
