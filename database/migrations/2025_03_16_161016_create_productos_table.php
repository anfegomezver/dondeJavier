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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');

            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->decimal('precio_compra', 8, 0);
            $table->integer('stock');
            $table->decimal('precio_venta', 8, 0);
            $table->integer('stock_minimo');
            $table->string('registrado_por');
            $table->date('fecha_vencimiento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
