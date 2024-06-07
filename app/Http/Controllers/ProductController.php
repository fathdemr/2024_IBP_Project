<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    public function AddProduct(Request $request){
        $request->validate([
            "ProductName" => "required",
            "ProductPrice" => "required",
            "ProductImage" => "required|image|mimes:jpeg,png,jpg,gif|max:2048",
            "ProductCategory" => "required"
        ]);

        $imagePath = $request->file('ProductImage')->store('images');


        $product = DB::table('products')->insert([
            "ProductName" => $request->ProductName,
            "ProductPrice" => $request->ProductPrice,
            "ProductImage" => $imagePath,
            "ProductCategory" => $request->ProductCategory
        ]);

        if($product){
            return redirect()->route('product')->with('success', 'Product Added Succesfuly!');
        }
    }

    
}
