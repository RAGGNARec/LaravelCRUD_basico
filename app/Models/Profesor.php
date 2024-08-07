<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    // Agrega aquí los campos que quieres permitir para asignación masiva
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        // Agrega otros campos que necesites
    ];
}
