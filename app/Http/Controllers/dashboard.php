<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index(){
        $data = products::all();
        return view('dashboard',compact('data'));
    }

    public function AddProductIndex(){
        return view('addPrdouct');
    }

    public function storeProduct(Request $request){
        $new = new product;
        $new->name = $request->name;
        $new->price = $request->price;
        $path = $request->file('img')->store('public');
        $new->img = Storage::url($path);
        $new->type = $request->type;
        $new->save();
        return back();

    }

}
