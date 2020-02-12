<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
    	
        return view('view');
    }

    public function index2(){
    	
       if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('home');
        }
    }

    public function inter(){
        
        return view('paket-internasional');
    }

    public function lokal(){
        
        return view('paket-lokal');
    }

    public function jogja(){

        return view('paket-lokal-jogja');
    }
}
