<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index(Request $request)
    {
        $guard = $request->route('guard') ?? $request->input('guard');
        return view('auth.login', compact('guard'));
    }

    // function login(Request $request)
    // {
    //     $guard = $request->route('guard') ?? $request->input('guard');
    //     $data = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|min:6',
    //     ]);

    //     if (Auth::guard($guard)->attempt($data, $request->filled('remember'))) {
    //         // dd(Auth::guard($guard)->user());
    //         return redirect()->route("{$guard}.dashboard");
    //     }


    //     return redirect()->back()->withErrors([
    //         'email' => 'بيانات الدخول غير صحيحة.',
    //     ]);
    // }
    public function login(Request $request)
    {
        $guard = $request->route('guard') ?? $request->input('guard');

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // تحقق إن كان البريد الإلكتروني موجود
        $userModel = match ($guard) {
            'super-admin' => SuperAdmin::class,
            default => null,
        };

        $user = $userModel::firstWhere('email', $credentials['email']);
        if (!$user) {
            Flasher::addError('User is not registered');
            return back();
        }

        // جرب تسجيل الدخول
        if (Auth::guard($guard)->attempt($credentials, $request->filled('remember'))) {
            Flasher::addSuccess('Login successfully');
            return redirect()->route("{$guard}.dashboard");
        }

        Flasher::addError('The password is incorrect.');
        return back();
    }

    function dashboard(Request $request)
    {
        $guard = $request->route('guard');
        return view("{$guard}.dashboard", [
            'guard' => $guard
        ]);
    }
}
