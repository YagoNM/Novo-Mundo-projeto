<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa as migrações.
     */
    public function up(): void
    {
        // Cria a tabela 'games' no banco de dados
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("url");
            $table->string("name");
            $table->text("description");
            $table->boolean("category");

        });
    }

    /**
     * Reverte as migrações.
     */
    public function down(): void
    {
        // Remove a tabela 'games' do banco de dados
        Schema::dropIfExists('games');
    }
};
