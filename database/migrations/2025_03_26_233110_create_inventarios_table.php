<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); 
            $table->integer('cantidad'); 
            $table->decimal('precio', 10, 2); 
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }
    
};
