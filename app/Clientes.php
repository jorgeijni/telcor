<?php

namespace telcor;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'Clientes';

    protected $primaryKey = "KeyCliente";

    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'KeyTipo',
        'Direccion',
        'KeyDepartamento',
        'KeyMunicipio',
        'Fecha',
        'Email',
        'Telefono',
        'Saldo',
        'Categoria'
    ];

    protected $guarded = [

    ];

    public function scopeSearch($query, $Nombre){
        return $query->where('Nombre', 'LIKE', "%$Nombre%");
    }
}
