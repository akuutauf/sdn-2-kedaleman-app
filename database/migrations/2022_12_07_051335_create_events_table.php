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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('judul_event', 200);
            $table->string('foto_event', 255)->nullable();
            $table->date('tanggal_event');
            $table->string('penyelenggara_event', 100)->nullable();
            $table->string('penanggung_jawab_event', 100)->nullable();
            $table->string('lokasi_event', 100)->nullable();
            $table->string('desc_event', 255)->nullable();
            $table->string('status_event', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
