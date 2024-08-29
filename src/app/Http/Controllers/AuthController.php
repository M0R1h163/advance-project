<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }


    public function logout(){
        return view('auth.login');
    }

    public function done(){
        return view('done');
    }

    public function register(){
        return view('auth.register');
    }

    // public function store(Request $request){
    //     $form = $request->all();
    //     User::create();
    //     return redirect('/');
    // }

    public function thanks(){
        return view('auth.thanks');
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
