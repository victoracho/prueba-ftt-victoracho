<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function puestos()

  {

    return $this->hasMany('App\Puesto');

  }

  protected $fillable = [
    'nombre','descripcion', 'razonSocial', 'correo', 'numeroTelefono', 'rif','user_id',
  ];
}
