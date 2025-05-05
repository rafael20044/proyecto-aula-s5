<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaccion extends Model
{
    protected $table = 'reacciones';
    protected $fillable = ['usuario_id', 'pregunta_id', 'respuesta_id', 'tipo'];
}
