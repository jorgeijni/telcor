<?php

namespace telcor;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $table = 'Municipio';

    protected $primaryKey = "KeyMunicipio";

    public $timestamps = false;

    protected $fillable = [
        'KeyDepartamento',
        'DescripcionMun'
    ];

    protected $guarded = [

    ];

    public function Departamentos(){
        return $this->belongsTo('App\Departamentos', 'KeyDepartamento');
    }


    public function scopeSearch($query, $DescripcionMun){
        return $query->where('DescripcionMun', 'LIKE', "%$DescripcionMun%");
    }
}
