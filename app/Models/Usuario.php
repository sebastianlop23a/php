<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios'; // Nombre correcto de la tabla en la BD

    protected $fillable = ['nombre', 'email', 'password', 'rol_id'];

    protected $hidden = ['password']; // Ocultar password al devolver JSON

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }
}
