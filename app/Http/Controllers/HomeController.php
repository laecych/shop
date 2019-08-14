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

    public function control()
    {
        return view('control');
    }
    public function products()
    {
        return view('products');
    }

    public function profile()
    {
        return view('profile');
    }
}
