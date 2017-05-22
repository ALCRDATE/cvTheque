<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('raison_social')->nullable()->unique();
            $table->string('adress')->unique()->nullable();
            $table->string('telephone')->nullable()->unique();
            $table->string('site_web')->nullable();
            $table->string('pays')->nullable();;
            $table->string('ville')->nullable();;
            $table->string('logo')->nullable();;
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
        Schema::dropIfExists('entreprises');
    }
/*
    Schema::table('entreprises', function($table) {
       $table->foreign('user_id')->references('id')->on('users');
    });
*/
}
