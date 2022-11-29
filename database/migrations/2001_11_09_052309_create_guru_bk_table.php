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
            $table->string('nama');
            $table->foreign('nama')->references('nama')->on('guru')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->primary('nama');
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
