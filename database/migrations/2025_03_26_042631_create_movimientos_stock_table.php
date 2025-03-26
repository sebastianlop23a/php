<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('movimientos_stock', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade');
            $table->integer('cantidad');
            $table->enum('tipo', ['entrada', 'salida']);
            $table->string('motivo')->nullable(); // Ejemplo: "Compra", "Venta", "Devolución"
            $table->timestamps();
        });
    }
    
};
