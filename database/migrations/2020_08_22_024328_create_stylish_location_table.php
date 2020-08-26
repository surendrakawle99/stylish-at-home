<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStylishLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stylish_location', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stylish_id');
            $table->unsignedBigInteger('location_id');
            $table->foreign('stylish_id')->references('id')->on('stylish');
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stylish_location');
    }
}
