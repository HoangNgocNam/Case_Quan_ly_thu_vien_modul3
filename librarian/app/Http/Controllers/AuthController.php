<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showFormRegister()
    {
        return view('pages.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        $data = $request->only('name', 'email', 'password');
        $data['password'] = Hash::make($request->password);
        $user = User::query()->create($data);
        $user->save();
        return redirect()->route('auth.showFormLogin');

    }

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
