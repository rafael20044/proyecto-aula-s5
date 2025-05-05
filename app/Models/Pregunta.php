<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';
    protected $fillable = ['usuario_id', 'etiqueta_id', 'titulo', 'contenido'];
}
