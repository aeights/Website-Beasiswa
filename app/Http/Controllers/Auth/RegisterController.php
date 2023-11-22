<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        if ($request->validated()) {
            if ($request->password == $request->confirm_password) {
                User::create([
                    'name' => $request->name,
                    'nim' => $request->nim,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
                return to_route('login')->with('message','Silahkan Login!');
            }
            return back()->with('message','Password tidak cocok!');
        }
    }
}
