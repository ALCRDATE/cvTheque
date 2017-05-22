<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condidats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            //$table->string('nom');
            //$table->string('prenom');
            //$table->string('email')->unique();
            //$table->string('password');
            $table->string('adress')->unique();
            $table->string('telephone')->unique();
            $table->integer('id_domaine');
            $table->string('pays');
            $table->string('ville');
            $table->string('photo_de_profil');
            $table->string('status');
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
        Schema::dropIfExists('condidats');
    }
}
