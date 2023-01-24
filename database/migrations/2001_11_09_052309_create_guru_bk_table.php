<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru_bk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nama');
            $table->foreign('nama')->references('id')->on('guru')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('deskripsi');
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
        Schema::dropIfExists('guru_bk');
    }
};
