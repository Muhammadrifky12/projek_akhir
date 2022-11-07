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
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_siswa');
            $table->foreign('id_siswa')->referenses('id')->on('siswa12');
            $table->bigInteger('id_pelanggaran');
            $table->foreign('id_pelanggaran')->referenses('id')->on('pelanggaran');
            $table->string('id_guru');
            $table->foreign('id_guru')->referenses('nama')->on('guru');
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
        Schema::dropIfExists('history');
    }
};
