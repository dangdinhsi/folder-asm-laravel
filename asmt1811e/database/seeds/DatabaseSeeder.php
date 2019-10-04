<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       /* KT 60p*/
        $url = [
            "https://women.uk.api.snapfashion.com/image/?id=67353362&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=54119294&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=54033569&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=67353362&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=67353282&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=67353349&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=67353366&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=67353347&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=67353361&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=67353354&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=67353353&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=67353358&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=67353290&width=260&height=300",
            "https://women.uk.api.snapfashion.com/image/?id=67141511&width=260&height=300",
        ];
        $data =[];
        for($i=1;$i<=50;$i++){
            $data[]=[
                'thumbnail_url'=>$url[rand(0,13)],
                'title'=>'Product '.$i,
                'price'=>1000*rand(1,8),
                'discount'=>0.2*rand(1,4)
            ];
        }
        DB::table('sanpham')->insert($data);
        /*end kt60p*/

       /* BT647*/
        $data2 =[];
        for($i=1;$i<=50;$i++){
            $data2[]=[
                'name'=>'product '.$i,
                'price'=>rand(500,1000),
                'amount'=>rand(100,300),
                'description'=>Str::random(10)
            ];
        }
        DB::table('product')->insert($data2);
        /*end BT647*/

        //BT 644
        DB::table('students')->insert([
            array('rollNo' =>'d00474','name'=>Str::random(7),'age'=>26 ,'address'=>Str::random(7),'email'=>Str::random(7)),
            array('rollNo' =>'d00475','name'=>Str::random(7),'age'=>27 ,'address'=>Str::random(7),'email'=>Str::random(7)),
            array('rollNo' =>'d00476','name'=>Str::random(7),'age'=>28 ,'address'=>Str::random(7),'email'=>Str::random(7)),
            array('rollNo' =>'d00477','name'=>Str::random(7),'age'=>29 ,'address'=>Str::random(7),'email'=>Str::random(7)),
            array('rollNo' =>'d00478','name'=>Str::random(7),'age'=>30 ,'address'=>Str::random(7),'email'=>Str::random(7)),
        ]);
        DB::table('subjects')->insert([
            array('subject_id'=>'java','name'=>Str::random(5)),
            array('subject_id'=>'li','name'=>Str::random(5)),
            array('subject_id'=>'hoa','name'=>Str::random(5)),
            array('subject_id'=>'van','name'=>Str::random(5)),
            array('subject_id'=>'su','name'=>Str::random(5)),
        ]);
        DB::table('points')->insert([
            array('sub_id'=>'java','rollNo'=>'d00474','point'=>rand(1,10)),
            array('sub_id'=>'li','rollNo'=>'d00474','point'=>rand(1,10)),
            array('sub_id'=>'hoa','rollNo'=>'d00474','point'=>rand(1,10)),
            array('sub_id'=>'van','rollNo'=>'d00474','point'=>rand(1,10)),
            array('sub_id'=>'su','rollNo'=>'d00474','point'=>rand(1,10)),
        ]);
        //end BT644
    }
}
