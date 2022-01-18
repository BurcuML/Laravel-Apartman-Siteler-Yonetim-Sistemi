<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Content;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Payment;
use App\Models\Revi;
use App\Models\Revie;
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
    public static function gettit()
    {
        return Menu::all();
    }
    public static function getrev()
    {
        return Revie::all();
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
    public function paymen(){


        return view('home.user_kira_aidat');
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

    public function sendreview(Request $request){

        $data= new Revie();
        $data-> user_id = $request->input('user_id');
        $data-> name = $request->input('name');
        $data-> apartman = $request->input('apartman');
        $data-> subject = $request->input('subject');
        $data->review= $request->input('review');
        $data->save();
        return redirect()->route('icerik');
    }

    public function sendprice(Request $request){

        $data= new Payment();
        $data-> name = $request->input('name');
        $data-> apartmannumarasi = $request->input('apartmannumarasi');
        $data-> bloknumarasi = $request->input('bloknumarasi');
        $data-> odasayisi = $request->input('odasayisi');
        $data-> kartnumarasi = $request->input('kartnumarasi');
        $data->guvenliknumarasi= $request->input('guvenliknumarasi');
        $data->kira= $request->input('kira');
        $data->aidat= $request->input('aidat');
        $data->adminnote= $request->input('adminnote');
        $data->save();
        return redirect()->route('paymen');
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


