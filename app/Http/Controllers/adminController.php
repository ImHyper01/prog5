<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index() {
        $products = products::all();
        return view('admin', compact('products'));
    }

    public function status(Request $request){
        $product = products::find('id');
        $product->status = request('status');
        $product->save();
        return view('admin');
    }
}

