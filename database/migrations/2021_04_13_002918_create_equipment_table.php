<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_last');
            $table->string('num_ingreso', 15);
            $table->string('almacen', 50);
            $table->string('movimiento', 50);
            $table->string('codigo', 15);
            $table->string('serie', 50);
            $table->string('descripcion', 150);
            $table->bigInteger('id_guia');
            $table->string('cod_almacen', 7);
            $table->string('centro_costo', 150);
            $table->string('cod_proyecto', 7);
            $table->string('ref_centro_costo', 150);
            $table->string('proveedor', 150);
            $table->float('costo');
            $table->dateTime('fecha_ingreso');
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
        Schema::dropIfExists('equipment');
    }
}
