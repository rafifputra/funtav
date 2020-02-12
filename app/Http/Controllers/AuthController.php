<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Auth;
use App\ModelCustomer;

class AuthController extends Controller
{
    public function login(){
	  return view('login');
	}

	public function loginpost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelCustomer::where('email',$email)->first();
        if($data){ 
            if(Hash::check($password,$data->password)){
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('home');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('view');
    }

	 public function register(Request $request){
        return view('register');
    }

    public function registerpost(Request $request){
        $this->validate($request,[

            'email' => 'required|unique:customer',
            'password' => 'required|min:3'
        ]);

       $data = array( 

            'email'              => $request->email,
          	'password'			 => bcrypt($request->password)
        );

        DB::table('customer')->insert($data);

        return redirect('login')->with('message', 'data saved successfully');              
    }
}
