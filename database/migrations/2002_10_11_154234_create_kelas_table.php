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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('kelass');
            $table->unsignedBigInteger('walas');
            $table->foreign('walas')->references('id')->on('guru')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->unsignedBigInteger('gurubk');
            $table->foreign('gurubk')->references('id')->on('guru_bk')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('kelas');
    }
};
