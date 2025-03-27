<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{public function up(): void {
    Schema::table('inventarios', function (Blueprint $table) {
        $table->unsignedBigInteger('producto_id')->after('id');
        $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
    });
}

public function down(): void {
    Schema::table('inventarios', function (Blueprint $table) {
        $table->dropForeign(['producto_id']);
        $table->dropColumn('producto_id');
    });
}

};
