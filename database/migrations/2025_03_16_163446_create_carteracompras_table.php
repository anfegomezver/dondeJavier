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
        Schema::create('carteracompras', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->unsignedBigInteger('id_orden_compra');
            $table->foreign('id_orden_compra')->references('id')->on('ordencompras');
            $table->decimal('abono', 8, 0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carteracompras');
    }
};
