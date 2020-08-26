<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stylish', function (Blueprint $table) {
            $table->id();
            $table->string('stylish_name',255);
            $table->string('salon_name',255);
            $table->string('stylish_email',255);
            $table->string('stylish_mobile',255)->nullable();
            $table->text('stylish_address',255);
            $table->integer('location_id');
            $table->string('std_fee ',255);
            $table->string('payment_method',255);
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
        Schema::dropIfExists('stylists');
    }
}
