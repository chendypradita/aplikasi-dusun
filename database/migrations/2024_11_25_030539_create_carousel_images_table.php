<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('carousel_images', function (Blueprint $table) {
            $table->id();
            $table->string('filename'); // Nama file gambar
            $table->string('title');    // Judul gambar
            $table->text('description'); // Deskripsi gambar
            $table->timestamps();
        });
    }

};
