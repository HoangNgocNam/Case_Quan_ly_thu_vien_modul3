<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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


    public function showFromResetPassword()
    {
        return view("pages.fromReset");
    }

    public function resetPassword(Request $request)
    {
        $currenPassword = Auth::user()->password;
        $newPassword = $request->newPassword;
        if (Hash::check($request->currenPassword,$currenPassword)){
            Auth::user()->password = Hash::make($newPassword);
            Auth::user()->save();
            return redirect()->route("auth.showFormLogin");
        }else{
            echo " Nhập Lại Mật Khẩu Cũ Bạn Ơi";
        }
    }
}
