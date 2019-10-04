<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function postStudent(Request $request){
        if(isset($request->fullname) && isset($request->age) && isset($request->address)){
            $data =[
              'fullname'=>$request->fullname,
              'age'=>$request->age,
              'address'=>$request->address
            ];
            DB::table('bt641student')->insert($data);
         return redirect()->route('list-student');
        }else{
            return view('BT641/form');
        }
    }
    public function listStudent(Request $request){
        $listStudent = DB::table('bt641student')->get();
        $index=1;
        return view('BT641/form')->with([
            'index'=>$index,
            'list'=>$listStudent
        ]);
    }
    public function deleteStudent(Request $request){
        $id =$request->id;
        DB::table('bt641student')->where('id',$id)->delete();
    }
}
