<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    protected $table ='productos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_categoria',
        'nombre',
        'descripcion',
        'imagen',
        'precio_compra',
        'stock',
        'precio_venta',
        'stock_minimo',
        'registrado_por',
        'fecha_vencimiento'
        
        
    ];
    
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }


    public function detallefactura(){
        return $this->hasMany(Detallefactura::class,'id_producto');
    }
    
    public function detalleordencompra(){
        return $this->hasMany(Detalleordencompra::class,'id_producto');
    }

}
