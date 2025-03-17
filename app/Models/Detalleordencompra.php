<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detalleordencompra extends Model
{
    use HasFactory;

    protected $table ='detalleordencompra';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_orden_compra',
        'id_producto',
        'cantidad',
        'precio_unitario',
        'subtotal'
        
    ];
    
    public function ordencompra(){
        return $this->belongsTo(Ordencompra::class, 'id_orden_compra');
    }
    public function producto(){
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
