<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('location_id');
            $table->integer('service_id');
            $table->integer('product_id');
            $table->integer('stylish_id')->nullable();
            $table->date('date1');
            $table->string('slot1',255);
            $table->date('date2');
            $table->string('slot2',255);
            $table->date('date3');
            $table->string('slot3',255);
            $table->tinyInteger('will_cary_product');
            $table->string('name',255);
            $table->integer('appointment_no');
            $table->string('email',255);
            $table->string('mobile',255);
            $table->text('address');
            $table->enum('status', ['pending', 'confirmed' , 'completed'])->default('pending');
            $table->date('final_date')->nullable();
            $table->string('final_slot',255)->nullable();
            $table->integer('last_modified_by');
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('completed_at')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
