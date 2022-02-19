<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    public function empresa()
    {
      return $this->belongsTo('App\Empresa');
    }

    public function cargo()
    {
      return $this->belongsTo('App\Cargo');
    }

    protected $fillable = [
      'anios_experiencia', 'empresa_id', 'cargo_id','descripcion'
    ];

}
