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
        Schema::create('gugatans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_perkara');
            $table->string('klasifikasi_perkara');
            $table->string('penggugat');
            $table->string('kuasahukum_penggugat');
            $table->string('tergugat');
            $table->string('kuasahukum_tergugat');
            $table->string('status_perkara');
            $table->string('lama_proses');
            $table->date('tanggal_sidang');
            $table->string('jam');
            $table->string('agenda');
            $table->string('ruangan');
            $table->text('hasil_sidang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gugatans');
    }
};
