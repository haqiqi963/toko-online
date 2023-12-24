<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function index()
    {
        $products = Product::paginate(15);
        return view('customer.home', [
            'products'      => $products,
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
