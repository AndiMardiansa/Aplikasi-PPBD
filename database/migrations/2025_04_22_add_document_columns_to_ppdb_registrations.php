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
        Schema::table('ppdb_registrations', function (Blueprint $table) {
            $table->string('pas_foto')->nullable()->after('status');
            $table->string('surat_lulus')->nullable()->after('pas_foto');
            $table->string('ijazah')->nullable()->after('surat_lulus');
            $table->string('kartu_keluarga')->nullable()->after('ijazah');
            $table->string('akte_kelahiran')->nullable()->after('kartu_keluarga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ppdb_registrations', function (Blueprint $table) {
            $table->dropColumn([
                'pas_foto',
                'surat_lulus',
                'ijazah',
                'kartu_keluarga',
                'akte_kelahiran'
            ]);
        });
    }
}; 