<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ServiceProviderLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login', ['url' => 'serviceprovider']);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->only('email'));
        }

        if (Auth::guard('serviceprovider')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('/Dashboards/serviceprovider_dash');
        }

        return redirect()->back()->withInput($request->only('email'));
    }
}
