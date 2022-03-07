<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousel', function (Blueprint $table) {
            $table->id('id_carousel');
            $table->tinyInteger('status')->default(1);
            $table->string('judul_berita')->nullable();
            $table->text('content')->nullable();
            $table->text('isi_berita')->nullable();
            $table->string('tanggal_berita');
            $table->text('link')->nullable();
            $table->string('route')->default('home.news');
            $table->string('path_foto_carousel')->nullable();
            $table->string('path_foto_carousel2')->nullable();
            $table->string('path_foto_carousel3')->nullable();
            $table->string('path_foto_carousel4')->nullable();
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
        Schema::dropIfExists('carousel');
    }
}
