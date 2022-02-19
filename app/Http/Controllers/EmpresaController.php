<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaRequest;
use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
  public function index()
  {

    return view('empresa.index', [
      'empresa' => Empresa::latest()->paginate()
    ]);
  }

  public function create()
  {
    return view('empresa.create', [
      'empresa' => new Empresa
    ]);
  }

  public function store(EmpresaRequest $r)
  {
    return Empresa::create( $r->validated() );
  }

  public function edit(Empresa $empresa)
  {
    return view('empresa.edit', compact('empresa'));
  }

  public function update(EmpresaRequest $r, Empresa $empresa)
  {
    $empresa->update($r->validated());
    return redirect('/');
  }

  public function destroy(Empresa $empresa)
  {
    $empresa->delete();
    return redirect('/empresa')->with('delete','');
  }
}
