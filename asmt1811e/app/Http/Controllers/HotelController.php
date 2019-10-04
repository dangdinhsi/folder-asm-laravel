<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class HotelController extends Controller
{
    public function showAll(Request $request){
        $dataRoom =[];
        for($i=1;$i<=10;$i++){
            $dataRoom[]=[
                'rollNo'=>Str::random(5),
                'type'=>Str::random(5).$i,
                'floor'=>rand(1,10),
                'price'=>1000*rand(1,9)
            ];
        }
        $dataHotel =[];
        for($i=1;$i<=2;$i++){
            $dataHotel[]=[
               'data_room'=>$dataRoom,
                'name'=>Str::random(5),
                'address'=>Str::random(5),
            ];
        }
        return view('index')->with([
           'list'=>$dataHotel,
            'list2'=>$dataRoom
        ]);
    }
    public function showDetail(Request $request){
        $dataRoom =[];
        for($i=1;$i<=10;$i++){
            $dataRoom[]=[
                'rollNo'=>Str::random(5),
                'type'=>Str::random(5).$i,
                'floor'=>rand(1,10),
                'price'=>1000*rand(1,9)
            ];
        }
        return view('index2')->with([
            'list'=>$dataRoom
        ]);
    }
}
