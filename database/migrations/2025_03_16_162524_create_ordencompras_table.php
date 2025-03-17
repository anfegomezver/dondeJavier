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
        Schema::create('ordencompras', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_proveedor');
            $table->foreign('id_proveedor')->references('id')->on('proveedores');

            $table->date('fecha');
            $table->string('estado');
            $table->decimal('monto_total', 8, 0);

            $table->unsignedBigInteger('id_forma_pago');
            $table->foreign('id_forma_pago')->references('id')->on('formaspago');

            $table->string('registrado_por');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordencompras');
    }
};
