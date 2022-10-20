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

    public function create() {
        return view('create');
    }

    public function editProduct($id) {

        return view('edit', compact('id'));
    }

    public function postCreate(Request $request){
        $create = new products();
        $create->name = request('name');
        $create->price = request('price');
        $create->save();
        return redirect()->route('productController');
    }

    public function deleteProduct($id){
        $product = products::find($id);
        $product->delete();
        return redirect()->route('productController');
    }

    public function postProduct(Request $request, $id){
        $product = products::find($id);
        $product->name = request('name');
        $product->price = request('price');
        $product->save();
        return redirect()->route('productController');
    }


    public function search(Request $request){

        $search_text = $request->query('search');
        $products = products::where('name', 'like', '%' . $search_text. '%')
            ->orWhere('price', 'like', '%' . $search_text . '%')->get();

        return view('product', compact('products'));
    }

    public function buy(){

        return view('buy');
    }

}



