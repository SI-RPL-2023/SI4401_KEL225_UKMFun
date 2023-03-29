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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user')->unsigned()->autoIncrement();
            $table->string('nama', 255);
            $table->integer('nim')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('jk')->nullable();
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->string('role')->default('mahasiswa');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
