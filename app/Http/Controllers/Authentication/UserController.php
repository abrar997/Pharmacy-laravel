<?php

namespace App\Http\Controllers\Authentication;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Categories;

class UserController extends Controller
{
    //
    public function Register(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->age = $request->input('age');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->phone = $request->input('phone');
        $user->location = $request->input('location');
        $user->save();
        return $user;
    }
    public function login(Request $request)
    {
        $findUSer = User::where('email', $request->email)->first();
        return $findUSer;
    }

    public function AllUser()
    {
        $data = User::all();
        return $data;
    }
}
