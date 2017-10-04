<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(LoginRequest $request)
    {
        $checkLogin = false;
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $checkLogin = Auth::attempt($login, $request->remember);

        if ($checkLogin) {
            return "OK";
        }
        return "FAIL";
    }
}
