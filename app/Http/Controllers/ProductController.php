<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product()
    {
        $products = Product::with('category')->get();
//        dd($products);
        return view('backend.product-index', compact('products'));
    }

    public function productedit($id)
    {
        if (!$id) {
            return false;
        }

        $product = Product::where('id', $id)->first();
        return view('backend.product-indexedit', compact('product'));
    }

    public function productdelete($id)
    {
//        dd(" This product is deleted sucessfully");
        Product::destroy($id);
        return redirect()->back();
    }


    public function productupdate(){

    }

    public function productStore(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'author' => 'required',
            'publish_on' => 'required',
        ]);
        try {
            $data = [

                'name' => $request->get('name'),
                'price' => $request->get('price'),
                'author' => $request->get('author'),
                'publish_on' => $request->get('publish_on'),
            ];

            Product::create($data);
            return redirect()->route('product');
        } catch (Exception $exception) {
            // dd($exception);
        }

    }

    public function createProduct()
    {
        $data['categories'] = Category::all();
        return view('backend.create-product',$data);

    }

}
