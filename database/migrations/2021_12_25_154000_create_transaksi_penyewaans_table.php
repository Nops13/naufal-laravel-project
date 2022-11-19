<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPenyewaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_penyewaans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_sewa');
            $table->string('merek');
            $table->string('type');
            $table->string('nopolisi');
            $table->integer('uang_jaminan');
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
        Schema::dropIfExists('transaksi_penyewaans');
    }
}
