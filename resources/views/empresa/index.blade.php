@extends('main.principal')
@section('content')
@if( session()->has('delete') )
  <script>
    toastr.error('El registro se elimino correctamente','Eliminado correctamente');
  </script>
@endif
<div class="container">
  <h1> Empresas </h1>
  <div class="row">
    @forelse($empresa as $productt)
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-primary">{{ $productt->nombre }}</strong>
          <h3 class="mb-0">
          <a class="text-dark" href="#">{{ $productt->name }}</a>
          </h3>
          <div class="mb-1 text-muted"> {{ $productt->descripcion }}</div>
          <div class="mb-1 text-muted"> {{ $productt->numeroTelefono }}</div>
          <div class="mb-1 text-muted"> {{ $productt->correo }}</div>
          <div class="row">
            @if(auth()->user())
              @if($productt->id == auth()->user()->empresa->id)
              <div class="col-md-6">
                <a class="create_edit btn btn-link" href="{{ route('empresa.edit', $productt) }}"><i class="fas fa-edit">Editar</i></a>
              </div>
              @endif
            @endif
            <div class="col-md-6">
              <a class="ofertas btn btn-link" href="{{ route('puesto.listado', $productt) }}"><i class="fas fa-list">Puestos</i></a>
            </div>
          </div>
        </div>
      <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"></rect><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
    </div>
  </div>
  @empty
  <div class="col-md-12">
    <h1 class="text-center"><i class="fas fa-store"></i>Sin Puestos</h1>
  </div>
  @endforelse

</div>

</div>
@include('empresa.modals.modal')

@endsection


