<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class productController extends Controller
{
    public function index() {
        $products = products::all();
        return view('product', compact('products'));
    }
}


