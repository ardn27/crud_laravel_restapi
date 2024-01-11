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
        Schema::create('klubs', function (Blueprint $table) {
            $table->id();
            $table->String('id_klub');
            $table->String('logo_klub');
            $table->text('nama_klub');
            $table->date('tgl_berdiri');
            $table->string('kondisi_klub');
            $table->string('kota_klub');
            $table->string('peringkat');
            $table->string('harga_klub');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klubs');
    }
};
