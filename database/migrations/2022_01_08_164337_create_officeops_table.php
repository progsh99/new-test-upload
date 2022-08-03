<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officeops', function (Blueprint $table) {
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





            $table->double('commisionprice');
            $table->String('passport');
            $table->String('files');
          //  $table->double('beforefinalprice');
          //  $table->double('backprice')->default(0);
          //  $table->double('finalprice');
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
        Schema::dropIfExists('officeops');
    }
}
