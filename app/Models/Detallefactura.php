<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detallefactura extends Model
{
    use HasFactory;

    protected $table ='detallefactura';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_factura',
        'id_producto',
        'cantidad',
        'precio_unitario',
        'subtotal'
        
    ];
    
    public function factura(){
        return $this->belongsTo(Factura::class, 'id_factura');
    }
    public function producto(){
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
