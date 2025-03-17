<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ordencompra extends Model
{
    use HasFactory;

    protected $table ='ordencompras';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_proveedor',
        'fecha',
        'estado',
        'monto_total',
        'id_forma_pago',
        'registrado_por'
        
    ];
    
    public function proveedor(){
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    public function formaspago(){
        return $this->belongsTo(Formapago::class, 'id_forma_pago');
    }

    public function carteracompras(){
        return $this->hasMany(Carteracompra::class,'id_orden_compra');
    }
    public function detalleordencompra(){
        return $this->hasMany(Detalleordencompra::class,'id_orden_compra');
    }
}
