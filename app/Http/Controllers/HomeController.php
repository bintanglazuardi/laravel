<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home(){
    	return view('halaman_home');
    }
    public function pertama(){
    	return view('halaman_pertama');
    }
    public function kedua(){
    	return view('halaman_kedua');
    }
    public function ketiga(){
    	return view('halaman_ketiga');
    }
}
