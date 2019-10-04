<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BT642Controller extends Controller
{
    public function addProduct(Request $request){
        if(isset($request->title)&&isset($request->price)&&isset($request->discount)&&isset($request->url_img)){
            $data =[
                [
                    'title'=>$request->title,
                    'price'=>$request->price,
                    'discount'=>$request->discount,
                    'url_img'=>$request->url_img
                ]
            ];
            DB::table('bt642_products')->insert($data);
            return redirect()->route('bt642-p2');
        }else{
            return view('BT642/form');
        }

    }

    public function listProduct(Request $request){
        $listProduct =DB::table('bt642_products')->get();
        return view('BT642/list-method2')->with([
           'list'=>$listProduct
        ]);
    }
}
