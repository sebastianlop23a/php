<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up(): void {
        Schema::table('inventarios', function (Blueprint $table) {
            $table->integer('cantidad_disponible')->after('producto_id')->default(0);
        });
    }

    public function down(): void {
        Schema::table('inventarios', function (Blueprint $table) {
            $table->dropColumn('cantidad_disponible');
        });
    }
};

