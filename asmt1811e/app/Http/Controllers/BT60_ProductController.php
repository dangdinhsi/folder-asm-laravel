<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BT60_ProductController extends Controller
{
    public function listProduct(Request $request){
        $index =1;
        $listProduct =DB::table('sanpham')->paginate(8);
        if (isset($request->page)) {
            $index = ($request->page-1)*8+1;
        }
        return view('kt60p/list')->with([
            'index'=>$index,
            'list'=>$listProduct
        ]);
    }
}
