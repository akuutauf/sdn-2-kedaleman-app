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
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_prestasi', 100);
            $table->string('foto_prestasi', 255)->nullable();
            $table->string('nama_perlombaan', 100)->nullable();
            $table->date('tanggal_prestasi');
            $table->string('peraih_prestasi', 255)->nullable();
            $table->string('desc_prestasi', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasis');
    }
};
