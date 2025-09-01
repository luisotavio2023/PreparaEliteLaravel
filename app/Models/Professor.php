<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Professor extends Authenticatable
{
    protected $fillable = [
        'nome', 'email', 'password', 'cpf', 'data_nascimento', 'formacao',
        'biografia', 'especialidades', 'salario', 'foto', 'ativo'
    ];

    protected $hidden = ['password'];

    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
}
