<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carteracompra extends Model
{
    use HasFactory;

    protected $table ='carteracompras';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fecha',
        'id_orden_compra',
        'abono'  
    ];
    
    public function ordencompra(){
        return $this->belongsTo(Ordencompra::class, 'id_orden_compra');
    }
}
