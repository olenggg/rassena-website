<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // ddd($products);

        return view('frontend.pages.product',compact('products'));
    }

}
