<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $bestSell = Product::where('quantity_out','>=', 5)->get();
        $products = Product::paginate(15);
        $countCarts = Cart::count();
        return view('customer.home', [
            'products'      => $products,
            'countCarts' => $countCarts,
            'bestSell' => $bestSell,
        ]);
    }

    public function addToCart(Request $request, $id)
    {
        $id_items = $request->input('id');
        $db = new Cart;
        $product = Product::find($id_items);
        $field = [
            'id_user'    => 'guest123',
            'id_items' => $id_items,
            'quantity'       => 1,
            'price'     => $product->price,
        ];

        $db::create($field);
        return redirect('/');
    }

    public function store(StoreTransactionRequest $request)
    {

    }
}
