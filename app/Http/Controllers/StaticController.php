<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function welcom() {
        return view('welcome');
    }

    public function home() {
        return view('home');
    }

    public function listeFormation() {
     return view('lister-formation');
    }

    public function register() {
     return view('auth.register');
    }

    public function forgotpassword() {
     return view('auth.forgotpassword');
    }

    public function profile() {
     return view('profile');
    }
    
    public function adds()
    {
        return view('adds');
    }

   
  
}
