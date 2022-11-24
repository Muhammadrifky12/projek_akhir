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
        Schema::create('siswa12', function (Blueprint $table) {
            $table->string('nama');
            $table->primary('nama');
            $table->string('id_kelas');
            $table->foreign('id_kelas')->references('kelass')->on('kelas');
            $table->char('nisn');
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
        Schema::dropIfExists('siswa12');
    }
};
