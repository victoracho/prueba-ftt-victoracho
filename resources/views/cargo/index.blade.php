@extends('main.principal')
@section('content')
@if( session()->has('delete') )
  <script>
    toastr.error('El registro se elimino correctamente','Eliminado correctamente');
  </script>
@endif
<div class="container">
<h1>Cargos</h1>
  <div class="row">
    @forelse($cargos as $cargo)
    <div class="col-md-4">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <div class="mb-1 text-muted"> Nombre del cargo: {{ $cargo->nombre }}</div>
          <div class="row">
          @if(auth()->user())
            <div class="col-md-6">
              <a class="create_edit_cargo btn btn-link" href="{{ route('cargo.edit', $cargo) }}"><i class="fas fa-edit">Editar</i></a>
            </div>
          @endif
          </div>
        </div>
    </div>
  </div>
  @empty
  <div class="col-md-12">
    <h1 class="text-center"><i class="fas fa-list"></i>Sin cargos</h1>
  </div>
  @endforelse

</div>

</div>
@include('cargo.modals.modal')

@endsection


