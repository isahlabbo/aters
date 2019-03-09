<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWardResultCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ward_result_counts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ward_id')->unsigned()->nullable()->foreign()->refernces('id')->on('wards')->delete('restrict')->update('cascade');
            $table->integer('type_id')->unsigned()->nullable()->foreign()->refernces('id')->on('types')->delete('restrict')->update('cascade');
            $table->integer('registered')->default(0);
            $table->integer('acredited')->default(0);
            $table->integer('valid')->default(0);
            $table->integer('invalid')->default(0);
            $table->integer('apc')->default(0);
            $table->integer('pdp')->default(0);
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
        Schema::dropIfExists('ward_result_counts');
    }
}
