<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Peserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE EXTENSION IF NOT EXISTS "uuid-ossp";');
        Schema::create('peserta', function (Blueprint $table) {
            $table->uuid('peserta_id')->primary();
            $table->string('nama_lengkap')->nullable();
            $table->text('foto')->nullable();
            $table->string('nip')->nullable();
            $table->string('ndh')->nullable();
            $table->string('jabgol')->nullable();
            $table->text('alamat')->nullable();
            $table->string('hp')->nullable();
            $table->string('instansi')->nullable();
            $table->text('judul_laporan')->nullable();
            $table->text('file_laporan')->nullable();
            $table->text('pesan')->nullable();
            $table->text('kesan')->nullable();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE peserta ALTER COLUMN peserta_id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta');
    }
}
