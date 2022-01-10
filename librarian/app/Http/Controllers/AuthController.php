<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
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
            session()->flash('error-login', 'Tài khoản không đúng');
            return redirect()->route('auth.showFormLogin');
        } else {
            toastr()->success('Đăng nhập thành công!');
            return redirect()->route('home.index');
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
        $data = $request->only('name','email','password');
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        $user->save();
        toastr()->success('Đăng ký thành công!');
        return redirect()->route('auth.showFormLogin');
    }

    public function logout()
    {
        Auth::logout();
        toastr()->success('Đăng xuất thành công');
        return redirect()->route('auth.login');
    }

    public function showFormChangePassword()
    {
        return view("pages.changePassword");
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $currentPassword = $user->password;
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:3',
            'confirmPassword' => 'required|same:newPassword',
        ]);
        if (!Hash::check($request->currentPassword, $currentPassword)) {
            return redirect()->back()->withErrors(['currentPassword' => 'Mật khẩu hiện tại không đúng']);
        }
        $user->password = Hash::make($request->newPassword);
        $user->save();
        toastr()->success('Đổi mật khẩu thành công');
        return redirect()->route('auth.login');
    }

}
