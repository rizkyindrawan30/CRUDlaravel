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
            $table->string('penerbit');
            $table->string('pengarang');
            $table->integer('jumlah_hal');
            $table->integer('no_rak');
            $table->string('ISBN');
            $table->integer('tahun_terbit');
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
