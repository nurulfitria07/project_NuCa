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
        schema::create('pasiens', function (Blueprint $table){
            $table->id();
            $table->string('nik');
            $table->string('name');
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->date('dob');
            $table->string('phone');
            $table->string('address');
            $table->text('message');
            
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
        Schema::dropIfExists('pasien');
    }
};
