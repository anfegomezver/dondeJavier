<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalleordencompra', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_orden_compra');
            $table->foreign('id_orden_compra')->references('id')->on('ordencompras');

            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('productos');
            
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 8, 0);
            $table->decimal('subtotal', 8, 0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleordencompra');
    }
};
