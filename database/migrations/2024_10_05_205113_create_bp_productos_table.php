<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('bp_productos', function (Blueprint $table) {
        $table->integer('codigo')->primary();
        $table->string('descripcion');
        $table->decimal('precio_venta', 10, 2);
        $table->decimal('precio_oferta', 10, 2)->nullable();
        $table->char('oferta', 1); // Puede ser 'S' o 'N'
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bp_productos');
    }
};
