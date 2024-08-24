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
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nome');
            $table->string('flag_concluida');
            $table->date('data');

            /* Antiga forma de implementar 
             * $table->unsignedBigInteger('atividade_id');
             *   $table->foreignId('atividade_id')->references('id')->on('atividades');
             */

            /* Nova forma de implementar */
            $table->foreignId('atividade_id')->constrained('atividades');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
