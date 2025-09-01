<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $fillable = [
        'usuario_id', 'curso_id', 'data_inicio', 'progresso', 'status',
        'avaliacao', 'comentario'
    ];

    protected $casts = [
        'data_conclusao' => 'date',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
