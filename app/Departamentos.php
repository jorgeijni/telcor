<?php

namespace telcor;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table = 'Departamento';

    protected $primaryKey = "KeyDepartamento";

    public $timestamps = false;

    protected $fillable = [
        'DescripcionDep'
    ];

    protected $guarded = [

    ];

    // Relación
    public function Municipios()
    {
        return $this->hasMany('App\Municipios');
    }

    public function scopeSearch($query, $DescripcionDep){
        return $query->where('DescripcionDep', 'LIKE', "%$DescripcionDep%");
    }
}
