<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinalmoneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finalmoneys', function (Blueprint $table) {
            $table->Integer('officeid');
            $table->String('officemainid');
            $table->String('mainid');
            $table->String('opid');
            $table->String('opcode');
            $table->String('operationname');
            $table->String('officename');
            $table->String('city');
            $table->String('id');  
            $table->String('employname');
            $table->String('patient');
            $table->String('age');
            $table->String('gender');
            $table->String('phone');
            $table->String('address');
            $table->double('operationprice');
            $table->String('visatype');
            $table->double('visaprice')->default(0);
 
          
            $table->String('flytype');
            $table->double('flyprice')->default(0);
    
            $table->double('commisionprice')->default(0) ;
            $table->String('passport');
            $table->String('files');
           // $table->double('beforefinalprice')->default(0);
          //  $table->double('backprice')->default(0);
          //  $table->double('finalprice');
           // $table->double('finalmoney');
           $table->String('info1')->default("info");
           $table->String('info2')->default("info");
           $table->String('info3')->default("info");
           $table->String('info4')->default("info");
           $table->String('info5')->default("info");
           $table->String('info6')->default("info");
           $table->String('info7')->default("info");
           $table->String('info8')->default("info");
           $table->String('info9')->default("info");



            $table->double('infovalue1')->default(0);
            $table->double('infovalue2')->default(0);
            $table->double('infovalue3')->default(0);
            $table->double('infovalue4')->default(0);
            $table->double('infovalue5')->default(0);
            $table->double('infovalue6')->default(0);
            $table->double('infovalue7')->default(0);
            $table->double('infovalue8')->default(0);
            $table->double('infovalue9')->default(0);


            $table->double('addmoney')->default(0);
            $table->double('finalmoney')->default(0);
            //addmoney

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finalmoneys');
    }
}
