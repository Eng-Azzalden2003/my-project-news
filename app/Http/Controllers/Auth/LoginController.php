<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $guard = $request->route('guard') ?? $request->input('guard');
        return view('auth.login', compact('guard'));
    }

    public function login(Request $request)
    {
        $guard = $request->route('guard') ?? $request->input('guard');
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard($guard)->attempt($data, $request->filled('remember'))) {
            // dd(Auth::guard($guard)->user());
            return redirect()->route("{$guard}.dashboard");
        }


        return redirect()->back()->withErrors([
            'email' => 'بيانات الدخول غير صحيحة.',
        ]);
    }
}
