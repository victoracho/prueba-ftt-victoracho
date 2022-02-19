<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PuestoRequest extends FormRequest
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'anios_experiencia' => 'required',
      'empresa_id' => 'required|string',
      'cargo_id' => 'required|string',
      'descripcion' => 'required|string',
    ];
  }
}
