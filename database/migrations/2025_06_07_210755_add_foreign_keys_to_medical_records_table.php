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
        Schema::table('medical_records', function (Blueprint $table) {
            $table->foreign(['patient_id'], 'medical_records_ibfk_1')->references(['id'])->on('patients')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['doctor_id'], 'medical_records_ibfk_2')->references(['id'])->on('users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medical_records', function (Blueprint $table) {
            $table->dropForeign('medical_records_ibfk_1');
            $table->dropForeign('medical_records_ibfk_2');
        });
    }
};
