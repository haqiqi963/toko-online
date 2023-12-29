<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\DetailTransaction;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            'products' => $products,
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
        $db = Cart::with('products')->where(['id_user' => 'guest123', 'status' => 0])->get();
        return view('customer.transaction', [
            'data' => $db
        ]);
    }

    public function checkout(Request $request)
    {
        $code = Transaction::count();
        $codeCheckout = date('Ymd') . $code + 1;
        $detailCheckout = DetailTransaction::where(['id_transaction' => $codeCheckout, 'status' => 0])
            ->sum('price');
        $totalItems = DetailTransaction::where(['id_transaction' => $codeCheckout, 'status' => 0])
            ->count('id_items');
        $qtyItems = DetailTransaction::where(['id_transaction' => $codeCheckout, 'status' => 0])
            ->sum('quantity');
        return view('customer.checkOut', [
            'detailCheckout' => $detailCheckout,
            'totalItems' => $totalItems,
            'qtyItems' => $qtyItems,
            'codeCheckout' => $codeCheckout
        ]);
    }

    public function checkoutProcess(Request $request, $id)
    {
        $data = $request->all();
        $findId = Cart::findOrFail($id);

        $code = Transaction::count();
        $codeTransaction = date('Ymd') . $code + 1;

        $detailTransaction = new DetailTransaction();
        $fieldDetails = [
            'id_transaction' => $codeTransaction,
            'id_items' => $data['id_items'],
            'quantity' => $data['quantity'],
            'price' => $data['total'],
        ];

        $detailTransaction->create($fieldDetails);

//        Update Cart

        $fieldCart = [
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'status' => 1,
        ];

        $findId->update($fieldCart);

        Alert::toast('Checkout Successfully', 'success');
        return redirect()->route('checkout');

    }

    public function processPayment(Request $request)
    {
        $data = $request->all();
        $dbTransaction = Transaction::create([
            'code_transaction' => $data['code_transaction'],
            'total_qty' => $data['qtyItems'],
            'total_price' => $data['dibayarkan'],
            'name_customer' => $data['name_customer'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'expedition' => $data['expedition'],
            'status' => 1,
        ]);

        $dbTransaction->save();

        $dataCart = DetailTransaction::whereIdTransaction($data['code_transaction'])->get();

        foreach ($dataCart as $value){
            $dataUpdate = DetailTransaction::whereId($value->id)->first();
            $dataUpdate->status = 1;
            $dataUpdate->save();

            $idProduct = Product::whereId($value->id_items)->first();
            $dataProduct = new Product();
            $dataProduct->sku = 'SKU'. '-' . rand(1000, 9999);
            $dataProduct->quantity = $idProduct->quantity - $value->qty;
            $dataProduct->quantity_out = $value->quantity;
            $dataProduct->save();
        }


        Alert::alert()->success('Transaction Successfully', 'Wait for items');
        return redirect()->route('home');


    }

}
