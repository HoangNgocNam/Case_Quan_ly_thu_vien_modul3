<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $roles = Role::all();
        return view('users.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        if ($request->hasFile('img')){
            $img = $request->file('img');
            $path =$img->store('imgs','public');
            $user->img = $path;
        }
        $user->save();
        $user->roles()->sync($request->role);
        return redirect()->route('');
    }
}
