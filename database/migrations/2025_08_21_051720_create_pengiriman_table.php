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
        Schema::create('t_pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pengiriman')->unique();
            $table->date('tanggal_pengiriman');
            $table->string('asal');
            $table->string('tujuan');
            $table->text('detail_barang');
            $table->foreignId('armada_id')->nullable()->constrained('m_armada')->onDelete('set null');
            $table->foreignId('driver_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade');
            $table->string('status')->default('Tertunda')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipment');
    }
};
