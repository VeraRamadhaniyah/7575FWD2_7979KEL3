<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\admin;

use Illuminate\Auth\SessionGuard;

use Auth;

class adminsesiController extends Controller
{

    public function index() {
		if(\Auth::check()){
            if(\Auth::user()->level=="user"){
				return view("masteruser", ['user'=>admin::all()]);
			}
			elseif (\Auth::user()->level=="admin") {
				return view("master", ['user'=>admin::all()]);
			}		
		}
	}
	
	public function form() {
		if(Auth::check()) {
			return redirect('/');
		}
		return view('login');
	}

	public function validasi(Request $input) {
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
			]);
		$admin = admin::where($input->only('username','password'))->first();
		if(! is_null($admin)) {
			Auth::login($admin);
			if(Auth::check())
				return redirect('/')->with('informasi',"Selamat Datang ".Auth::user()->username);
		}
				return redirect('/login')->withErrors(['admin tidak ditemukan']);
	}

	public function logout() {
		if(Auth::check()){
			Auth::logout();
				return redirect('/login')->withErrors(['Silahkan login untuk masuk ke sistem']);
		} else {
			return redirect('/login')->withErrors(['Silahkan login terlebih dahulu']);
		}
	}
}
