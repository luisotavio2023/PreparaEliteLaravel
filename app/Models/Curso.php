<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'categoria_id', 'professor_id', 'nome', 'descricao', 'duracao_horas',
        'nivel', 'preco', 'preco_promocional', 'thumbnail', 'destaque', 'ativo'
    ];

    protected $casts = [
        'destaque' => 'boolean',
        'ativo' => 'boolean',
        'preco' => 'float',
        'preco_promocional' => 'float'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function aulas()
    {
        return $this->hasMany(Aula::class)->orderBy('ordem');
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}
