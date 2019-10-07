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
        Schema::create('rundata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userid')->nullable();
            $table->string('runmode')->nullable();
            $table->string('runtime')->nullable();
            $table->string('rundistance')->nullable();
            $table->string('runcal')->nullable();
            $table->string('hrbegin')->nullable();
            $table->string('hrgraph')->nullable();
            $table->string('gpsdistance')->nullable();
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
        //
    }
}
