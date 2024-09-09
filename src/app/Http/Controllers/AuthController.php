<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginMenu(){
        return view('login_menu');
    }

    public function thanks(){
        return view('auth.thanks');
    }

    public function homeMenu(){
        return view('home_menu');
    }

        public function back(){
        return  redirect()->back();
    }




    // public function store(Request $request){
    //     $form = $request->all();
    //     User::create();
    //     return redirect('/');
    // }



    public function detail(){
        return view('detail');
    }



    public function done(){
        return view('done');
    }


    public function mypage(){
        return view('mypage');
    }
}
