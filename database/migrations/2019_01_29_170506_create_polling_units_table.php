<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollingUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polling_units', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ward_id')->unsigned()->nullable()->foreign()->refernces('id')->on('wards')->delete('restrict')->update('cascade');
            $table->string('name');
            $table->integer('acredited')->default(0);
            $table->integer('registered')->default(0);
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
        Schema::dropIfExists('polling_units');
    }
}
