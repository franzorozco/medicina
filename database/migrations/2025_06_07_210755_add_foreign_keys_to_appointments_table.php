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
        Schema::table('appointments', function (Blueprint $table) {
            $table->foreign(['patient_id'], 'appointments_ibfk_1')->references(['id'])->on('patients')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['doctor_id'], 'appointments_ibfk_2')->references(['id'])->on('users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropForeign('appointments_ibfk_1');
            $table->dropForeign('appointments_ibfk_2');
        });
    }
};
