<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category', 'type')->paginate(4);
        return view('admin.page.product', compact( 'products'));
    }

    public function addModal()
    {
        $categories = Category::all();
        $types = Type::all();
        return view('admin.modal.addModal',[
                'sku' => 'SKU'. '-' . rand(1000, 9999),
                'categories' => $categories,
                'types' => $types,
                'title' => 'Add New Product',
            ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
           'name_product' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'quantity' => 'required',
            'img_product' => 'mimes:jpeg,png,gif,bmp,svg',
        ]);

        $products = Product::create([
            'sku' => $request->sku,
            'name_product' => $request->name_product,
            'type_id' => $request->type_id,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'discount' => 10 / 100,
        ]);

        if ($request->hasFile('img_product')) {
            $photo = $request->file('img_product');
            $filename = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('storage/product'), $filename);
            $products->img_product = $filename;
        }

        $products->save();

        Alert::toast('Data berhasil disimpan', 'success');
        return redirect('/secret/admin/product');

    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $types = Type::all();
        return view(
            'admin.modal.editModal',
            [
                'title' => 'Edit data product',
                'product'  => $product,
                'types'  => $types,
                'categories'  => $categories,
            ]
        )->render();
    }

    public function update(Request $request, Product $product, $id)
    {
        $product = Product::findOrFail($id);

        if ($request->file('img_product')) {
            // Hapus file gambar sebelumnya
            File::delete(public_path('storage/product/' . $product->img_product));

            $photo = $request->file('img_product');
            $extension = $photo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $photo->move(public_path('storage/product'), $filename);
        } else {
            $filename = $request->img_product;
        }

        $data = [
            'sku'           => $request->sku,
            'name_product'  => $request->name_product,
            'type_id'       => $request->type_id,
            'category_id'   => $request->category_id,
            'price'         => $request->price,
            'quantity'      => $request->quantity,
            'discount'      => 10 / 100,
            'is_active'     => 1,
            'img_product'   => $filename,
        ];

        $product->update($data);

        Alert::toast('Data Successfully Updated', 'success');
        return redirect('/secret/admin/product');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        File::delete(public_path('storage/product/' . $product->img_product));

        // Hapus record dari database
        $product->delete();

        return response()->json($json);
    }
}
