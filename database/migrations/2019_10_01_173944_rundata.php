<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rundata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rundatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('runmode')->nullable();
            $table->string('runtime')->nullable();
            $table->string('rundistance')->nullable();
            $table->string('hraverage')->nullable();
            $table->string('runcalorie')->nullable();
            $table->string('hrgraph')->nullable();
            $table->string('gpsdistance')->nullable();
            $table->string('daterun')->nullable();
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
        Schema::dropIfExists('rundatas');
    }
}
