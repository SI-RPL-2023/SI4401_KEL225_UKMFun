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
            $table->id('id_event')->unsigned()->autoIncrement();
            $table->integer('id_ukm');
            $table->string('nama_ukm');
            $table->string('nama_event');
            $table->string('poster');
            $table->date('tanggal');
            $table->string('deskripsi', 5000);
            $table->string('link', 5000);
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
        Schema::dropIfExists('events');
    }
};
