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
        // 'id_ukm',
        // 'nama_lengkap', 	
        // 'nim', 	
        // 'jurusan', 	
        // 'jenis_kelamin', 	
        // 'alamat_lengkap', 	
        // 'email', 	
        // 'no_hp',
        // 'ksm', 	
        // 'khs', 	
        // 'cv',
        // 'status',
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id('id_pendaftaran')->unsigned()->autoIncrement();
            $table->integer('id_mahasiswa');
            $table->integer('id_ukm');
            $table->string('nama_ukm', 50);
            $table->string('nama', 255);
            $table->integer('nim')->length(50);
            $table->string('jurusan', 255);
            $table->string('jk', 255);
            $table->string('alamat', 2000);
            $table->string('email');
            $table->integer('no_hp')->length(50);
            $table->string('ksm', 255);
            $table->string('khs', 255);
            $table->string('cv', 255);
            $table->string('status', 255)->default('Belum');
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
        Schema::dropIfExists('pendaftarans');
    }
};
