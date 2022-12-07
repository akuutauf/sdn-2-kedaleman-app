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
        Schema::create('pengumumans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_arsip')->nullable();
            $table->string('judul_pengumuman', 200);
            $table->string('pembuat_pengumuman', 100);
            $table->string('penerima_pengumuman', 50);
            $table->string('perihal_pengumuman', 100)->nullable();
            $table->date('tanggal_pengumuman');
            $table->string('isi_pengumuman', 255);
            $table->foreign('id_arsip')->references('id')->on('arsips')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengumumans');
    }
};
