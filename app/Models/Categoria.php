<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory;

    protected $table ='categorias';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'descripcion',
        'registrado_por'
        
    ];

    public function productos(){
        return $this->hasMany(Producto::class,'id_producto');
    }

}
