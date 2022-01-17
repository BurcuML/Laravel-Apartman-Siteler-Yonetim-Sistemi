<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public static function menuList()
    {
        return Menu::where('parent_id', '=' , 0)->with('children')->get(); //sorgu fonksiyonu, parent_id si 0 olanlarla başlıyoruz
    }

    public static function getSetting()
    {
        return Setting::first();
    }

    public static function gettype()
    {
        return Content::all();
    }

     public function index()
     {

    $setting= Setting::first();         //tek satır alıyoruz
    return view('home.index', ['setting'=> $setting, 'page'=>'home']);
     }

    public function aboutus(){

        $setting= Setting::first();

        return view('home.about', ['setting'=> $setting]);
    }

    public function faq(){

        $setting= Setting::first();

        return view('home.faq', ['setting'=> $setting]);
    }
    public function references(){

        $setting= Setting::first();

        return view('home.references', ['setting'=> $setting]);
    }
    public function contact(){

        $setting= Setting::first();

        return view('home.contact', ['setting'=> $setting]);
    }
    public function icerik(){


        return view('home.icerikdetay');
    }

    public function sendmessage(Request $request){

        $data= new Message();
        $data-> name= $request->input('name');
        $data-> email = $request->input('email');
        $data-> phone = $request->input('phone');
        $data->apartmannumarasi= $request->input('apartmannumarasi');
        $data-> status = $request->input('status');
        $data->message= $request->input('message');
        $data->subject= $request->input('subject');
        $data->note= $request->input('note');
        $data->save();
        Session::flash('message', 'This is a message!');
        return redirect()->route('contact')->with('success', 'Mesajınız kaydedilmiştir, teşekkür ederiz');
    }

    public function login(){
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {

        if ($request->isMethod('post')) {

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required', 'password'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else{
            return view('admin.login');
        }
    }
    public function logout(Request $request){

       Auth::logout();

       $request->session()->invalidate();

       $request->session()->regenerateToken();

       return redirect('/admin/login');
    }
}


