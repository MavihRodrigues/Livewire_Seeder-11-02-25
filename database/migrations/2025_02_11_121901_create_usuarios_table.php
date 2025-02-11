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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->nullable(false);
            $table->string('email', 30)->nullable(false)->unique(true);
            $table->string('celular', 20)->nullable(false);
            $table->string('estado_civil', 255)->nullable(false);
            $table->date('data_nascimento')->nullable(false);
            $table->string('cidade', 255)->nullable(false);
            $table->string('estado', 255)->nullable(false);
            $table->string('endereco', 255)->nullable(false);
            $table->string('cep', 255)->nullable(false);
            $table->string('password', 255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
