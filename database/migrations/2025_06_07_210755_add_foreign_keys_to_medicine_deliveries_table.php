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
        Schema::table('medicine_deliveries', function (Blueprint $table) {
            $table->foreign(['medical_record_id'], 'medicine_deliveries_ibfk_1')->references(['id'])->on('medical_records')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['medicine_id'], 'medicine_deliveries_ibfk_2')->references(['id'])->on('medicines')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medicine_deliveries', function (Blueprint $table) {
            $table->dropForeign('medicine_deliveries_ibfk_1');
            $table->dropForeign('medicine_deliveries_ibfk_2');
        });
    }
};
