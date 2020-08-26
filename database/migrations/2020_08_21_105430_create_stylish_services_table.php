<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStylishServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stylish_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stylish_id');
            $table->unsignedBigInteger('service_id');
            $table->foreign('stylish_id')->references('id')->on('stylish');
            $table->foreign('service_id')->references('id')->on('services');
            $table->text('service_description');
            $table->double('service_cost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stylish_services');
    }
}
