<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(){
        return view('login');
    }


    public function logout(){
        return view('index');
    }

    public function done(){
        return view('done');
    }

    public function register(){
        return view('register');
    }

    public function thanks(){
        return view('thanks');
    }

    public function detail(){
        return view('detail');
    }

    public function homeMenu(){
        return view('home_menu');
    }

    public function loginMenu(){
        return view('login_menu');
    }

    public function mypage(){
        return view('mypage');
    }
}
