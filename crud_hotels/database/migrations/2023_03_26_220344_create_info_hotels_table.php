<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_hotels', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique()->required();
            $table->string('cuidad')->required();
            $table->string('direccion')->required();
            $table->string('nit')->required();
            $table->integer('numHabitaciones')->required();
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
        Schema::dropIfExists('info_hotels');
    }
};
