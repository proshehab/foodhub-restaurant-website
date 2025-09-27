<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('website.layouts.index');
    }

    public function about(){
        return view('website.about.index');
    }
}
