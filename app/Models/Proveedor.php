<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Proveedor extends Model
{
    use HasFactory;

    protected $table ='proveedores';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'registrado_por',
        'correo',
        'direccion',
        'numero_telefono'
    ];
    
    public function ordencompras(){
        return $this->hasMany(Ordencompra::class,'id_proveedor');
    }
}
