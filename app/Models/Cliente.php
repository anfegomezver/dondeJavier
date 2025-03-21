<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $table ='clientes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'documento',
        'correo',
        'direccion',
        'numero_telefono',
        'fecha_nacimiento',
        'registrado_por',
        'estado_civil'
    ];
    public function facturas(){
        return $this->hasMany(Factura::class,'id_cliente');
    }
}

