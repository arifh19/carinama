<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identifikasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->nullable();
            $table->string('klasifikasi')->nullable();
            $table->string('a')->nullable();
            $table->string('b')->nullable();
            $table->string('c')->nullable();
            $table->string('d')->nullable();
            $table->string('e')->nullable();
            $table->string('f')->nullable();
            $table->string('g')->nullable();
            $table->string('h')->nullable();
            $table->string('i')->nullable();
            $table->string('j')->nullable();
            $table->string('k')->nullable();
            $table->string('l')->nullable();
            $table->string('m')->nullable();
            $table->string('n')->nullable();
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
        Schema::dropIfExists('identifikasis');
    }
}
