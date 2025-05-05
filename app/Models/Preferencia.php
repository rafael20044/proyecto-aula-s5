<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preferencia extends Model
{
    protected $table = 'preferencias';
    protected $fillable = [usuario_id, etiqueta_id];
}
