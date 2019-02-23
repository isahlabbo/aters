<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollingUnitIncidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polling_unit_incidences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('polling_unit_id')->unsigned()->nullable()->foreign()->refernces('id')->on('polling_units')->delete('restrict')->update('cascade');
            $table->integer('incidence_id')->unsigned()->nullable()->foreign()->refernces('id')->on('incidences')->delete('restrict')->update('cascade');
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
        Schema::dropIfExists('polling_unit_incidences');
    }
}
