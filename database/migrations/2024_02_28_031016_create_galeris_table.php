<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): Void
    {
        Schema::create('galeris', function (Blueprint $table){
            $table->increments('id_galeri');
            $table->unsignedInteger('id_user');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('foto');
            $table->date('tanggal');
            $table->softDeletes();
            $table->timestamps();
        });
        
    } 

    /**
     * Reverse the Migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
