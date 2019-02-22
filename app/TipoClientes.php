<?php

namespace telcor;

use Illuminate\Database\Eloquent\Model;

class TipoClientes extends Model
{
    protected $table = 'TipoClientes';

    protected $primaryKey = "KeyTipo";

    public $timestamps = false;

    protected $fillable = [
        'KeyTipo',
        'TipoCliente'
    ];

    protected $guarded = [

    ];

    public function scopeSearch($query, $TipoCliente){
        return $query->where('TipoCliente', 'LIKE', "%$TipoCliente%");
    }
}
