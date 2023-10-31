<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function store(){

        alert('Добро пожаловать');
        // if(true){
        //     return redirect()->back()->withInput();
        // }
        return redirect()->route('user.posts');
    }
}
