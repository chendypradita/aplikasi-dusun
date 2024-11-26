<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('permohonans', function (Blueprint $table) {
            $table->string('file_path')->nullable(); // Menambahkan kolom file_path
        });
    }

    public function down()
    {
        Schema::table('permohonans', function (Blueprint $table) {
            $table->dropColumn('file_path'); // Menghapus kolom file_path jika rollback dilakukan
        });
    }

};
