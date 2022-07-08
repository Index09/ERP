<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {

        return view('product.create');
    }
    public function insert(Request $request)
    {
        $filename = "Product" . time() . '.' . request()->product_image->getClientOriginalExtension();
        request()->product_image->move(public_path('images/products'), $filename);
        product::create([
            'name' => $request->name,
            'code' => $request->code,
            'disc' => $request->disc,
            'sell_price' => $request->sell_price,
            'buy_price' => $request->buy_price,
            'orderpackage_id' => auth()->user()->orderpackage->id,
            'picture' => $filename,
        ]);
        return response()->json(200);
    }
    public function productsview()
    {
        return view('product.view');
    }

    public function getproducts()
    {

        $products = product::where('orderpackage_id', auth()->user()->orderpackage->id)->get();
        return response()->json(['products' => $products]);
    }
    public function product_delete(Request $request)
    {

        product::destroy($request->product_id);

        return response()->json(200);
    }
}
