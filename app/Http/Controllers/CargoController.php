<?php

namespace App\Http\Controllers;

use App\Http\Requests\CargoRequest;
use App\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
  public function index()
  {
    return view('cargo.index', [
      'cargos' => Cargo::latest()->paginate()
    ]);
  }

  public function create()
  {
    return view('cargo.create', [
      'cargo' => new Cargo
    ]);
  }

  public function store(CargoRequest $r)
  {
    return Cargo::create( $r->validated() );
  }

  public function edit(Cargo $cargo)
  {
    return view('cargo.edit', compact('cargo'));
  }

  public function update(CargoRequest $r, Cargo $cargo)
  {
    $cargo->update($r->validated());
    return redirect('/');
  }

  public function destroy(Cargo $cargo)
  {
    $cargo->delete();
    return redirect('/cargo')->with('delete','');
  }
}
