<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('polling_unit_id')->unsigned()->nullable()->foreign()->refernces('id')->on('polling_units')->delete('restrict')->update('cascade');
            $table->integer('type_id')->unsigned()->nullable()->foreign()->refernces('id')->on('types')->delete('restrict')->update('cascade');
            $table->integer('apc')->default(0);
            $table->integer('pdp')->default(0);
            $table->integer('other')->default(0);
            $table->integer('valid_vote')->default(0);
            $table->integer('invalid_vote')->default(0);
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
        Schema::dropIfExists('results');
    }
}
