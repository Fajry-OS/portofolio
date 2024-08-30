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
        Schema::table('educations', function (Blueprint $table) {
            // Mengubah kolom 'jurusan' untuk menjadi nullable
            $table->string('jurusan', 150)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('educations', function (Blueprint $table) {
            // Mengembalikan kolom 'jurusan' ke non-nullable
            $table->string('jurusan', 150)->nullable(false)->change();
        });
    }
};
