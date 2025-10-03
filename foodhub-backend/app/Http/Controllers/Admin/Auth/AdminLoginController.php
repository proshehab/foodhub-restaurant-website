<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function index(){
        return view('backend.auth.login');
    }

    public function login(Request $request){
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the admin in
        if (auth()->guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // If successful, redirect to intended location
            return redirect()->intended(route('admin.dashboard'));
        }

        // If unsuccessful, redirect back with input and error message
        return back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
}
