<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiPakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_pakans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pakan');
            $table->date('tanggal_pemberian');
            $table->time('waktu_pemberian');
            $table->integer('jumlah_pemberian');
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
        Schema::dropIfExists('informasi_pakans');
    }
}
