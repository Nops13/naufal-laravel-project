<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringAyamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoring_ayams', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_ayam_masuk');
            $table->decimal('rata_berat_ayam',3,2);
            $table->integer('ayam_sehat');
            $table->integer('ayam_sakit');
            $table->string('keterangan');
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
        Schema::dropIfExists('monitoring_ayams');
    }
}
