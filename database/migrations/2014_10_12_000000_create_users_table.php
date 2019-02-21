<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lga_id')->unsigned()->nullable()->foreign()->refernces('id')->on('lgas')->delete('restrict')->update('cascade');;
            $table->integer('polling_unit_id')->unsigned()->nullable()->foreign()->refernces('id')->on('polling_units')->delete('restrict')->update('cascade');
            $table->integer('ward_id')->unsigned()->nullable()->foreign()->refernces('id')->on('wards')->delete('restrict')->update('cascade');
            $table->integer('center_id')->unsigned()->nullable()->foreign()->refernces('id')->on('centers')->delete('restrict')->update('cascade');
            $table->integer('collation_id')->unsigned()->nullable();
            $table->integer('federal')->unsigned()->nullable();
            $table->integer('returning')->unsigned()->nullable();
            $table->char('code');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
