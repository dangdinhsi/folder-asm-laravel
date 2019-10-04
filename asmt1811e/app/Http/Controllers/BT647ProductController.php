<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BT647ProductController extends Controller
{
    public function showAll(Request $request){

        $listProduct =DB::table('product')->paginate(10);
        $index = 1;
        if (isset($request->page)) {
            $index = ($request->page-1)*10+1;
        }
        return view('BT647/index')->with([
            'index'=>$index,
            'list'=>$listProduct
        ]);
    }
}
