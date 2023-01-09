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
        Schema::create('input10rpl1', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->foreign('Nama')->references('nama')->on('siswa')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->unsignedBigInteger('Skor');
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
        Schema::dropIfExists('input10rpl1');
    }
};
