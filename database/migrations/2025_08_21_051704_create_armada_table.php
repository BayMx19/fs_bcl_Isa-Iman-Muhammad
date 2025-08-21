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
        Schema::create('m_armada', function (Blueprint $table) {
            $table->id();
            $table->string('no_armada')->unique();
            $table->foreignId('jenis_kendaraan_id')->constrained('m_jenis_kendaraan')->onDelete('cascade');
            $table->integer('kapasitas');
            $table->string('status')->default('Tersedia');
            $table->foreignId('driver_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armada');
    }
};
