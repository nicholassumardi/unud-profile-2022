<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id('id_news');
            $table->bigInteger('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id_admin')->on('admin')->cascadeOnDelete();
            $table->string('judul_berita');
            $table->string('tanggal_berita');
            $table->string('path_foto_berita')->nullable();
            $table->text('isi_berita');
            $table->tinyInteger('status')->default(1)->comment('1 = Aktif, 0 = Tidak Aktif');
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
        Schema::dropIfExists('news');
    }
}
