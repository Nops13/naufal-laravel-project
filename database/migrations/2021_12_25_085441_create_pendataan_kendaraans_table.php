<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendataanKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendataan_kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('merek');
            $table->string('type');
            $table->integer('tahun_perakitan');
            $table->string('bahan_bakar');
            $table->string('nopolisi');
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
        Schema::dropIfExists('pendataan_kendaraan');
    }
}
