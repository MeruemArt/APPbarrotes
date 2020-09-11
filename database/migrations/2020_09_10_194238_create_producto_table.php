<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->double('valor_E', 8, 2);
            $table->double('valor_S', 8, 2);
            $table->bigInteger('proveedor_id')->unsigned();
            $table->bigInteger('estado_producto_id')->unsigned();
            $table->bigInteger('detalle_recepcion_id')->unsigned();
            $table->timestamps();

            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->foreign('estado_producto_id')->references('id')->on('estado_producto');
            $table->foreign('detalle_recepcion_id')->references('id')->on('detalle_recepcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
