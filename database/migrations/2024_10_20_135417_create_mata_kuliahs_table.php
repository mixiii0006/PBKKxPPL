<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mata_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mk');
            $table->integer('sks');
            $table->unsignedBigInteger('dosen_id');  // Foreign key to dosens table
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mata_kuliahs');
    }
};