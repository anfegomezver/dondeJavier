<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Factura extends Model
{

    use HasFactory;

    protected $table ='facturas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_cliente',
        'fecha',
        'estado',
        'monto_total',
        'id_forma_pago',
        'registrado_por'
        
    ];
    
    public function cliente(){
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function formaspago(){
        
        return $this->belongsTo(Formapago::class, 'id_forma_pago');
    }

    public function carteraclientes(){
        return $this->hasMany(Carteracliente::class,'id_factura');
    }
    public function detallefactura(){
        return $this->hasMany(Detallefactura::class,'id_factura');
    }
}


