<?php

namespace App\Http\Controllers\Website\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function userRegister(){
        return view('website.auth.register');
    }


}
