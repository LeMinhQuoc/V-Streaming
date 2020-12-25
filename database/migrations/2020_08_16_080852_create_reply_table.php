<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('c_id');
            $table->foreign('c_id')->references('id')->on('comment');
            $table->integer('u_id');
            $table->foreign('u_id')->references('id')->on('user');
            $table->string('re_comment');
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
        Schema::dropIfExists('reply');
    }
}
