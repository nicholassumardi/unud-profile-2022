<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppds', function (Blueprint $table) {
            $table->id('id_ppds');
            // $table->string('nama');
            // $table->string('ttl');
            $table->string('path_foto_ppds');
            // $table->tinyInteger('status')->comment('1 = Lulusan, 0 = PPDS');
            // $table->text('content');
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
        Schema::dropIfExists('ppds');
    }
}
