<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBt642ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bt642_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('price')->unsigned();
            $table->float('discount',3,1);
            $table->string('url_img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bt642_products');
    }
}
