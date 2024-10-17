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
        Schema::create('waktu', function (Blueprint $table) {
            $table->id();
            $table->date('janji_date');  // Menyimpan tanggal 
            $table->time('janji_time'); // menyimpan waktu
            $table->string('dokter');    // Menyimpan nama dokter
            $table->string('ruang_praktek'); // Menyimpan ruang praktek
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
        Schema::dropIfExists('waktu');
    }
};
