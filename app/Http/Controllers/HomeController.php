<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home')->with('title', 'home');
    }

    public function products()
    {
        return view('products')->with('title', 'products');
    }
    public function introduction()
    {
        return view('introduction')->with('title', 'introduction');
    }
    public function profile()
    {
        return view('profile');
    }
}
