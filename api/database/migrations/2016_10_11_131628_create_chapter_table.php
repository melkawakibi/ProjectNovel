<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */'novel_id' => $faker->numberBetween($min = 1, $max = 5),
    public function up()
    {
        Schema::create('chapter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('txt');
            $table->integer('novel_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('chapter', function($table){
            $table->foreign('novel_id')->references('id')->on('novel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chapter');
    }
}