<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('customer.home');
    }
    public function shop()
    {
        return view('customer.shop');
    }

    public function contact()
    {
        return view('customer.contact');
    }

    public function transaction()
    {
        return view('customer.transaction');
    }

}
