<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_type', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('p_id');
            $table->foreign('p_id')->references('id')->on('film');
            $table->integer('t_id');
            $table->foreign('t_id')->references('id')->on('type');
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
        Schema::dropIfExists('phim_type');
    }
}
