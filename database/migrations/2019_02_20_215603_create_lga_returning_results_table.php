<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLgaReturningResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lga_returning_results', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('type_id')->unsigned()->nullable()->foreign()->refernces('id')->on('types')->delete('restrict')->update('cascade');
            $table->integer('lga_id')->unsigned()->nullable()->foreign()->refernces('id')->on('lgas')->delete('restrict')->update('cascade');
            $table->integer('registered');
            $table->integer('acredited');
            $table->integer('apc');
            $table->integer('pdp');
            $table->integer('other');
            $table->integer('invalid');
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
        Schema::dropIfExists('lga_returning_results');
    }
}
