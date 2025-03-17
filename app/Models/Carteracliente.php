<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carteracliente extends Model
{
    use HasFactory;

    protected $table ='carteraclientes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fecha',
        'id_factura',
        'abono'  
    ];
    
    public function factura(){
        return $this->belongsTo(Factura::class, 'id_factura');
    }
}
