<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        if ($validated) {
            Auth::attempt($validated);
            return to_route('redirect');
        }
        return back();
    }
}
