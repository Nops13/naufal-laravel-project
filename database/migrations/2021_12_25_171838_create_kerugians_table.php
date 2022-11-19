<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerugiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerugians', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pengembalian');
            $table->string('merek');
            $table->string('type');
            $table->string('nopolisi');
            $table->string('kerusakan');
            $table->string('ket');
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
        Schema::dropIfExists('kerugians');
    }
}
