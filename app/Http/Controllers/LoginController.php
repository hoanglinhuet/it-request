<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Employees;

class LoginController extends Controller
{

    protected $redirectTo = '/';
    public function getLogin(){
        if(Auth::check()){
            return redirect()->route('home');
        }else{
            return view('login');
        }
    }

    public function postLogin(Request $request){
        $user = Employees::where('username', $request->username)->first();
        if(!$user) return redirect()->back()->withInput()->withErrors($errors = [
                    'username' => 'Tài khoản không tồn tại' 
                ]);
    	$login = [
    		'username' => $request->username,
    		'password' => $request->password
    	];
    	if (Auth::attempt($login)) {
    		return redirect()->route('home');
    	}else{
    		return redirect()->back()->withInput()->withErrors($errors = [
                    'password' => 'Mật khẩu không đúng' 
                ]);
    	}
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
