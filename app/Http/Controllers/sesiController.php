<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Auth\SessionGuard;

use App\admin;

use Auth;

class sesiController extends Controller
{
    // public function index()
     //{
     	//return view('master');
    public function index() {
        if(\Auth::check()){
            if(\Auth::admin()->level=="user"){
                //echo "admin";
                return view("masteruser", ['admin'=>admin::all()]);
            }
            elseif (\Auth::admin()->level=="admin"){
                //echo "admin";
                return view("master", ['admin'=>admin::all()]);
            }
        }
    }
    public function form()
    {
    	if(Auth::check()){
    		return redirect('/');
    	}
    	return view('login');
    }
    public function validasi(Request $input)
    {
    	$this->validate($input,[
    		'username'=>'required',
    		'password'=>'required',
    	]);
    	$admin = admin::where($input->only('username','password'))->first();
    	if(! is_null($admin)){
    		Auth::login($admin);
    		if(Auth::check())
    	return redirect('/')->with('informasi',"Selamat Datang" .Auth::admin()->username);
    	}
    	return redirect('/login')->withErrors(['admin tidak ditemukan']);
    }
    public function logout()
    {
    	if(Auth::check()){
    		Auth::logout();
    		return redirect('/login')->withErrors(['Silahkan login untuk masuk ke sistem']);
    	}else{
    		return redirect('/login')->withErrors(['Silahkan login terlebih dahulu']);
    	}
    }
}
