<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'nombre' => 'required',
      'descripcion' => 'required|string',
      'rif' => 'required|string',
      'razonSocial' => 'required|string',
      'numeroTelefono' => 'required|string',
      'correo' => 'required|string',
      'user_id' => 'required|string'
    ];
  }
}
