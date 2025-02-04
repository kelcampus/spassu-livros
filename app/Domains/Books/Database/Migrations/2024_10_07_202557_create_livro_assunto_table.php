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
        Schema::create('Livro_Assunto', function (Blueprint $table) {
            $table->unsignedInteger('Livro_Codl');
            $table->unsignedInteger('Assunto_CodAs');

            // Chaves estrangeiras
            $table->foreign('Livro_Codl')->references('Codl')->on('Livro')->onDelete('cascade');
            $table->foreign('Assunto_CodAs')->references('CodAs')->on('Assunto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Livro_Assunto');
    }
};
