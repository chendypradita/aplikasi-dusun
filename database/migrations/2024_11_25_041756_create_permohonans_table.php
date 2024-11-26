<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warga_id')->constrained()->onDelete('cascade'); // Relasi dengan warga
            $table->text('keluhan'); // Kolom untuk keluhan
            $table->string('file_path')->nullable(); // Kolom untuk menyimpan path file yang diupload
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('permohonans');
    }
};



