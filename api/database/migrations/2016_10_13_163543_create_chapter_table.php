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
     */
    public function up()
    {
        Schema::create('chapter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('novel_id')->unsigned();
            $table->date('created_at');
            $table->date('updated_at');
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