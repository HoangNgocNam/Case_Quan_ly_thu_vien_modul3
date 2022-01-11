<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('users.list', compact('users', 'roles'));
    }
    public function delete($id)
    {
      $user = User::findOrFail($id);
      $user->roles()->detach();
      $user->delete();
        toastr()->success('Xóa người dùng thành công!');
      return redirect()->route('users.index');
    }

        public function create()
        {
            $roles = Role::all();
            return view('users.create', compact('roles'));
        }

    public function store(CreateUserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $path = $img->store('imgs', 'public');
            $user->img = $path;
        }
        $user->save();
        $user->roles()->sync($request->role);
        toastr()->success('Thêm người dùng thành công');
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('users.update',compact('user','roles'));
    }

    public function update(UpdateUserRequest $request , $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $path = $img->store('imgs', 'public');
            $user->img = $path;
        }
        $user->save();
        $user->roles()->sync($request->role);
        toastr()->success('Cập nhật người dùng thành công');
        return redirect()->route('users.index');
    }

    public function search($keyword)
    {
         $user = User::where("name","like",'%'.$keyword.'%')->get();
         return response()->json($user);
    }
}
