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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru', 100);
            $table->string('foto_guru', 255)->nullable();
            $table->string('nik_guru', 16);
            $table->string('nuptk_guru', 16)->nullable();
            $table->string('nip_guru', 18)->nullable();
            $table->string('gender_guru', 10);
            $table->string('tempat_lahir_guru', 100)->nullable();
            $table->date('tanggal_lahir_guru');
            $table->string('jabatan_guru', 50);
            $table->string('email_guru', 100)->nullable();
            $table->string('no_telp_guru', 15)->nullable();
            $table->string('alamat_guru', 255)->nullable();
            $table->string('status_guru', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
};
