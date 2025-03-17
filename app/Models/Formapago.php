<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formapago extends Model
{
    use HasFactory;

    protected $table ='formaspago';
    protected $primaryKey = 'id';
    protected $fillable = [
        'metodo_pago',
        'detalles_pago'
    ];
    public function facturas(){
        return $this->hasMany(Factura::class,'id_forma_pago');
    }
    public function ordencompras(){
        return $this->hasMany(Ordencompra::class,'id_forma_pago');
    }
}
