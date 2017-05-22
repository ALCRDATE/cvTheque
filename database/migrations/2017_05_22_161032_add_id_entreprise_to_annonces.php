<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdEntrepriseToAnnonces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annonces', function($table) {
            $table->index('entreprise_id');
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('annonces', function($table) {
            $table->dropColumn('entreprise_id');
        });
    }
}
