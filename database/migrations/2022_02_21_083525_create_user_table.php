<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('tipe_user_id');
            $table->foreign('tipe_user_id')->references('id_tipe_user')->on('tipe_user');
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
        Schema::dropIfExists('user');
    }
}
