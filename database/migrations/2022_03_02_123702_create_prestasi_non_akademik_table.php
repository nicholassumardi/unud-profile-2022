<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiNonAkademikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi_non_akademik', function (Blueprint $table) {
            $table->id('id_prestasi_nonakademik');
            $table->text('content')->default('<b>Juara 3 :</b> Lomba Fotografi HUT RSUP Sanglah ke-58 2017 <br>
            <b>Juara 2 :</b> Lomba Video Gratifikasi RSUP Sanglah 2018
            <br>
            <b>Juara 2 :</b> Lomba Busana Adat ke Pura HUT RSUP sanglah ke-59 2018
            <br>
            <b>Juara 1 :</b> Lomba video lucu HUT RSUP Sanglah ke-60 2019
            <br>
            <b>Juara 2 :</b> Lomba Lip Sync HUT RSUP Sanglah ke-60 2019
            <br>
            <b>Juara 2 :</b> Lomba karaoke HUT RSUP Sanglah ke-61 2020
            <br>
            <b>Juara 1 :</b> Lomba umbul-umbul HUT RSUP Sanglah ke-61 2020
            <br>
            <b>Juara 2 :</b> Lomba photo voice: Dies Natalis UNUD Ke 59
            <br>
            <b>Juara 1 :</b> Lomba podcast mini jenaka : Dies Natalis UNUD Ke 59
            <br>
            <b>Juara 1 :</b> Lomba Fotografi : HUT RSUP Sanglah ke-62 2021<br>
            <b>Juara 2 :</b> Lomba Cover Lagu Akustik :HUT RSUP Sanglah ke-62 2021
            <br>
            <b>Juara 2 :</b> Lomba Tumpeng : HUT RSUP Sanglah ke-62 2021
            <br>');
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
        Schema::dropIfExists('prestasi_non_akademik');
    }
}
