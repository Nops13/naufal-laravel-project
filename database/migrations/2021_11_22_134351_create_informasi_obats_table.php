<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_obats', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_obat');
            $table->date('tanggal_pemberian');
            $table->string('waktu_pemberian');
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
        Schema::dropIfExists('informasi_obat');
    }
}
