<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'cantidad', 'precio', 'descripcion', 'tipo'];

    /**
     * Devuelve si el registro es un producto en inventario o un movimiento de stock.
     */
    public function esStock()
    {
        return $this->tipo === 'stock';
    }

    public function esInventario()
    {
        return $this->tipo === 'inventario';
    }
}
