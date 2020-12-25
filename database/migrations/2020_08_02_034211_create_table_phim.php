<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePhim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('p_name');
            $table->tinyInteger('p_serie');
            $table->string('p_link');
            $table->string('p_image');
            $table->string('p_director');
            $table->string('p_nation');
            $table->date('p_released_year');
            $table->string("p_sumary",255);
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
        Schema::dropIfExists('phim');
    }
}
