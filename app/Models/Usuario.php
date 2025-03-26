<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
    use HasFactory;
    
    protected $table = 'usuarios'; // Nombre correcto de la tabla en la BD
    protected $fillable = ['nombre', 'rol_id']; // Agrega las columnas necesarias
}
