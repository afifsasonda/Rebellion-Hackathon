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
        Schema::create('relasi_aktivitas', function (Blueprint $table) {

            $table->bigInteger('user_id');
            $table->bigInteger('aktivitas_id');

            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('relasi_keterampilan', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->bigInteger('keterampilan_id');

            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('relasi_pengalaman', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->bigInteger('pengalaman_id');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relasi_aktivitas');
        Schema::dropIfExists('relasi_keterampilan');
        Schema::dropIfExists('relasi_pengalaman');
    }
};
