<?php

namespace App\Http\Controllers;

use App\Http\Requests\PuestoRequest;
use App\Puesto;
use App\Cargo;
use App\Empresa;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
  public function listado(Empresa $empresa)
  {
    
    return view('puesto.index', [
      'puestos' => $empresa->puestos,
      'empresa' => $empresa
    ]);
  }

  public function create()
  {
  
    return view('puesto.create', [
      'puesto' => new Puesto,
      'cargos'=> Cargo::latest()->paginate()
    ]);
  }

  public function store(PuestoRequest $r)
  {
    return Puesto::create( $r->validated() );
  }

  public function edit(Puesto $puesto)
  {
    return view('puesto.edit', [
      'puesto' => $puesto,
      'cargos'=> Cargo::latest()->paginate()
    ]);
  }

  public function update(PuestoRequest $r, Puesto $puesto)
  {
    $puesto->update($r->validated());
    return redirect('/');
  }

  public function destroy(Puesto $puesto)
  {
    $puesto->delete();
    return redirect('/puesto')->with('delete','');
  }
}
