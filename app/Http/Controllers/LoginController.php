<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
    	return view('halaman_login');
    }
    public function register(){
    	return view('halaman_register');
    }
}
