<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Factura extends Model
{

    protected $table ='facturas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fecha',
        'total',
        'estado',
        'cliente_id',
        'registradoPor'
    ];
    
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}


