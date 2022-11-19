<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiBeliPakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_beli_pakans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pakan');
            $table->date('tanggal_pembelian');
            $table->time('waktu_pembelian');
            $table->integer('jumlah_pembelian');
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
        Schema::dropIfExists('informasi_beli_pakans');
    }
}
