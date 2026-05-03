<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $expectedUser = (string) env('ADMIN_USER', '');
        $expectedPassword = (string) env('ADMIN_PASSWORD', '');

        if ($expectedUser === '' || $expectedPassword === '') {
            abort(403);
        }

        $username = (string) $request->input('username');
        $password = (string) $request->input('password');

        if (!hash_equals($expectedUser, $username) || !hash_equals($expectedPassword, $password)) {
            return back()->withErrors([
                'username' => app()->getLocale() === 'ar' ? 'بيانات الدخول غير صحيحة.' : 'Invalid credentials.',
            ])->withInput();
        }

        Session::put('admin_authenticated', true);

        return redirect()->route('admin.contact-messages.index');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget('admin_authenticated');

        return redirect()->route('admin.login');
    }
}
