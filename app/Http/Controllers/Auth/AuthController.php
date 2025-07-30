<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

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
    // forget password
    function indexForgetPassword(Request $request)
    {
        $guard = $request->route('guard');
        return view("auth.forget-password", compact('guard'));
    }
    // forget password submit

    public function forgetPassword(Request $request)
    {
        $guard = $request->route('guard');
        $request->validate(['email' => ['required', 'email']]);

        $broker = $this->getPasswordBroker($guard);

        $status = Password::broker($broker)->sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            Flasher::addSuccess('We have Sent the link to rest password.');
            // flash()
            //     ->option('position', 'top-center')  // Position on the screen
            //     ->option('timeout', 5000)           // How long to display (milliseconds)
            //     ->option('rtl', true)               // Right-to-left support
            //     ->success('We have Sent the link to rest password!');
            return back()->with('status', 'We have Sent the link to rest password.');
        }

        // أي حالة غير النجاح تُعتبر “بريد خاطئ”
        Flasher::addError('This email is not registered with us.');
        return back()->withErrors(['email' => 'This email is not registered with us.']);
    }

    public function showResetForm(Request $request, $token = null)
    {
        $guard = $request->route('guard');
        $email = $request->query('email');

        return view('auth.reset-password', compact('guard', 'token', 'email'));
    }




public function resetPassword(Request $request)
{
    $guard = $request->route('guard');
    $broker = $this->getPasswordBroker($guard);

    // استخدام Validator بدل validate
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
        'token' => 'required'
    ], [
        'email.required' => 'Email required',
        'email.email' => 'Invalid email format',
        'password.required' => 'Password required',
        'password.min' => 'Password must be at least 8 characters',
        'password.confirmed' => 'Passwords do not match',
        'token.required' => 'Link is invalid or missing'
    ]);

    if ($validator->fails()) {
        foreach ($validator->errors()->all() as $error) {
            Flasher::addError($error);
        }
        return back()->withInput();
    }

    // نفس منطق reset password السابق
    $status = Password::broker($broker)->reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->password = Hash::make($password);
            $user->save();
        }
    );

    if ($status === Password::PASSWORD_RESET) {
        Flasher::addSuccess('Your password has been successfully modified. You can log in now.');
        return redirect()->route("$guard.login");
    }

    Flasher::addError('Password change failed. Please ensure your email address and link are correct.');
    return back()->withInput($request->only('email'));
}



















    protected function getPasswordBroker($guard)
    {
        return match ($guard) {
            'super-admin' => 'super_admins',
            default => 'super_admins',
        };
    }
}
