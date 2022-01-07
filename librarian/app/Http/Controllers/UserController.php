<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.list', compact('users'));
    }

    public function delete(Request $request)
    {
        $id = $request->idUser;
        foreach ($ids as $id) {
            $user = User::find($id);
            $user->types()->detach();
            $user->delete();
        }
        $data = [
            'status' => 'success',
            'message' => 'Delele successfully!'
        ];
        return response()->json($data);
    }
}
