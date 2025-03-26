<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_producto', // Ahora el usuario ingresará el tipo de producto
        'cantidad',
    ];
}
