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
            $table->string('nama');
            $table->foreign('nama')->references('nama')->on('Siswa11')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('skor');
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
