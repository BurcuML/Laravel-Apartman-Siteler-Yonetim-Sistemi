<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){

        return view('admin.index');

    }

    public function aboutus(){
        return view('home.about');
    }

    public function login(){
        return view('admin.login');
    }

    public function logincheck(Request $request){
        if($request->isMethod('post')){
            $credentials=$request->only('email', 'password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
        }
    }
}
