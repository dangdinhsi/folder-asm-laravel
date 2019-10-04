<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BT645ProductController extends Controller
{
    public function addProduct(Request $request){
        if(isset($request->name)&&isset($request->image)&&isset($request->price)&&isset($request->discount)&&isset($request->description)){
            var_dump($request->all());
        }else{
            return redirect()->route('bt645-form');
        }
    }
}
