<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page', function (Blueprint $table) {
            $table->increments('id');
            $table->string('txt');
            $table->string('imgUrl')->nullable();
            $table->string('type');
            $table->integer('chapter_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('page', function($table){
            $table->foreign('chapter_id')->references('id')->on('chapter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page');
    }
}
