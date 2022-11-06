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
        Schema::create('siswa10rpl2', function (Blueprint $table) {
            $table->id();
            $table->string('id_kelas');
            $table->foreign('id_kelas')->references('kelas_id')->on('kelas');
            $table->char('nisn');
            $table->string('nama');
            $table->char('JK');
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
        Schema::dropIfExists('siswa10rpl2');
    }
};
