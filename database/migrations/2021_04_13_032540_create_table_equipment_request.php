<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEquipmentRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_request', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('equipment_id')->unsigned();
            $table->bigInteger('request_id')->unsigned();
            $table->foreign('equipment_id')->references('id')->on('equipment');
            $table->foreign('request_id')->references('id')->on('requests');
            $table->dateTime('fecha_reserva');
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
        Schema::dropIfExists('equipment_request');
    }
}
