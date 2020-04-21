<?php

namespace App\Http\Controllers;

use App\Mail\Order;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function invest()
    {
        return view('invest');
    }

    public function lang($lang) {

        if (array_key_exists($lang, \Config::get('language'))) {
            Session::put('appLocale', $lang);

            return back();
        }

        return redirect('/');
    }

    public function registration() {
        return view('registration');
    }

    public function postRegistration(Request $request) {

        \Mail::to('info@ld-transport.com')->send(new Order($request));

        dd($request->all());

    }
}
