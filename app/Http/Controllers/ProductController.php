<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    function product()
    {
        $title = "Minisho";
        $product = Product::all();

        return view("products.product",compact("title","product"));
    }

    function detailProduct($slug)
    {
        $title = "Minisho";
        $product = Product::findOrFail($slug);

        return view("products.detail",compact("title","product"));
    }

    function checkout($slug)
    {
        $title = "Minisho";
        $item = Product::findOrFail($slug);

        return view("checkout.index",compact("item"));
    }

    function wishProduct($slug)
    {
        $title = "Minisho";
        $item = Product::findOrFail($slug);

        return redirect()->back();
    }

}
