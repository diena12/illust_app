<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('users.home');
    }

    public function terms(){
        return view('users.contact');
    }

    public function request(){
        return view('users.contact');
    }

    public function contact(){
        return view('users.contact');
    }

    public function privacyPolicy(){
        return view('users.contact');
    }
}
