<?php

namespace App\Http\Controllers\Website\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserLoginController extends Controller
{
    public function userRegister(){
        return view('website.auth.register');
    }

    public function userRegisterStore(Request $request){
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();  
        return redirect()->route('user.register')->with('success', 'Registration successful. You can now log in.');
    }


}
