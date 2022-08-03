<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->String('colorp1');
            $table->String('colorp2');
            $table->String('colorp3');
            $table->String('colorp4');
            $table->String('colorp5');
            $table->String('colorp6');
            $table->String('colorp7');
            $table->String('colorp8');
            $table->String('colorp9');
            $table->String('colorp10');
            $table->String('colorp11');
            $table->String('colorp12');
            $table->String('colorp13');
            $table->String('colorp14');
            $table->String('colorp15');
            $table->String('colorp16');
            $table->String('colorp17');
            $table->String('colorp18');
            $table->String('colorp19');
            $table->String('colorp20');
            $table->String('colorp21');
            $table->String('colorp22');
            $table->String('colorp23');
            $table->String('colorp24');
            $table->String('colorp25');
            $table->String('colorp26');
            $table->String('colorp27');
            $table->String('colorp28');
            $table->String('colorp29');
            $table->String('colorp30');
            $table->String('colorp31');
            $table->String('colorp32');
            $table->String('colorp33');
            $table->String('colorp34');
            $table->String('colorp35');
            $table->String('colorp36');
            $table->String('colorp37');
            $table->String('colorp38');
            $table->String('colorp39');
            $table->String('colorp40');
            $table->String('colorp41');
            $table->String('colorp42');
            $table->String('colorp43');
            $table->String('colorp44');
            $table->String('colorp45');
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
        Schema::dropIfExists('colors');
    }
}
