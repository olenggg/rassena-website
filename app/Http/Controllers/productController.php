<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        $coba = Product::all();

        return view('product', ['coba' => $coba]);
    }
}
