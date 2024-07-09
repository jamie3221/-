<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer; // Adjust this based on your model namespace
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered; // Add this line
use Illuminate\Support\Facades\Auth; // Add this line

class RegisterController extends Controller
{
    // Modify the existing store method to handle registration and redirect to the dashboard
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->only('name', 'email'));
        }

        // Create a new customer record
        $customer = Customer::create([
            'Cname' => $request->name,
            'Cemail' => $request->email,
            'Cpassword' => Hash::make($request->password),
            // Add any other fields you need to save during registration
        ]);

        // Automatically log in the registered customer
        Auth::guard('customer')->login($customer);

        // Fire the Registered event
        event(new Registered($customer));

        // Redirect to the customer dashboard
        return redirect('/customer/dashboard');
    }
}
