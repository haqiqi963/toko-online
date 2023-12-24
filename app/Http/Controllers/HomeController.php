<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function home()
    {
        $products = Product::all();
        return view('customer.home',[
            'products' => $products
        ]);
    }
    public function shop()
    {
        $products = Product::paginate(2);
        return view('customer.shop', compact('products'));
    }

    public function contact()
    {
        return view('customer.contact');
    }

    public function transaction()
    {
        return view('customer.transaction');
    }

    public function checkout()
    {
        return view('customer.checkOut');
    }

}
