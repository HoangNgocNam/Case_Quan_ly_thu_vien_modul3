<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function showFormLogin()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = [
          'email' => $email,
          'password' => $password
        ];

        if (!Auth::attempt($data)) {
            session()->flash('error-login', 'Tai khoan khong dung');
            return redirect()->route('auth.showFormLogin');
        } else {

        }
    }
}
