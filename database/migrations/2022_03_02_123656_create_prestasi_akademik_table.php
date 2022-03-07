<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiAkademikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi_akademik', function (Blueprint $table) {
            $table->id('id_prestasi_akademik');
            $table->text('content')->default('<b>Juara 2</b> Tingkat International Poster Free Paper OSAPS, ISAPS, InaPRAS 2018
            <br>
            <b>Juara 1</b> Lomba Poster Ilmiah HUT RSUP Sanglah ke-58 2017
            <br>
            <b>Juara 3</b> Lomba Poster Ilmiah HUT RSUP Sanglah ke-60 2019<br>
            <b>Juara 2</b> International Microsurgery Club
            <br>
            <b>On-Demand Best Like :</b> The 13th Asia Pasific Burn Congress<br>
            <b>Juara 1 ePoster Competition :</b> 3rd Joglosemar Craniofacial Forum 2021');
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
        Schema::dropIfExists('prestasi_akademik');
    }
}
