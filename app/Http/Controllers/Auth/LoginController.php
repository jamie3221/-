<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle login form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Determine login attempt based on the type of user (customer or service provider)
        if (Auth::guard('customer')->attempt($credentials)) {
            // Authentication passed for customer
            return redirect()->intended('/customer/dashboard');
        } elseif (Auth::guard('service_provider')->attempt($credentials)) {
            // Authentication passed for service provider
            return redirect()->intended('/provider/dashboard');
        } else {
            // Authentication failed, redirect back with error
            return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
        }
    }

    /**
     * Logout the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
