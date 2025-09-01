<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email', 'password', 'nome', 'cpf', 'tipo', 'data_nascimento',
        'telefone', 'endereco', 'cidade', 'estado', 'cep', 'foto',
        'descricao', 'nacionalidade', 'ativo'
    ];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'ativo' => 'boolean',
        'data_nascimento' => 'date',
    ];

    public function matriculas()
    {
        return $this->hasMany(Matricula::class, 'usuario_id');
    }

    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }
}
