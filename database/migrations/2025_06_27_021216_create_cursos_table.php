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
       Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('professor_id')->constrained('professores')->onDelete('cascade');
            $table->string('nome');
            $table->text('descricao');
            $table->integer('duracao_horas');
            $table->enum('nivel', ['iniciante','intermediario','avancado']);
            $table->decimal('preco', 10, 2);
            $table->decimal('preco_promocional', 10, 2)->nullable();
            $table->string('thumbnail')->nullable();
            $table->boolean('destaque')->default(false);
            $table->boolean('ativo')->default(true);
            $table->timestamps();
            
            $table->index(['ativo']);
            $table->index(['destaque']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
