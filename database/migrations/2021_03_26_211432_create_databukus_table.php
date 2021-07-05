<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_buku');
            $table->string('judul_buku');
            $table->string('pengarang');
            $table->string('bahasa');
            $table->string('penerjemah');
            $table->string('penerbit');
            $table->string('tempat_terbit');
            $table->string('cetakan');
            $table->string('tahun_terbit');
            $table->integer('kode_lemari');
            $table->integer('jumlah_buku');
            $table->string('ISBN');
            $table->string('klasifikasi');
            $table->string('kode_buku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('databukus');
    }
}
