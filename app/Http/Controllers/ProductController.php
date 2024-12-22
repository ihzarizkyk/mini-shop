<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    function product()
    {
        $title = "Minisho";

        return view("products.product",compact("title"));
    }

    function detailProduct()
    {
        $title = "Minisho";

        return view("products.detail",compact("title"));
    }

    function wishProduct()
    {
        
    }

}
