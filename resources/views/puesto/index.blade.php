@extends('main.principal')
@section('content')
@if( session()->has('delete') )
  <script>
    toastr.error('El registro se elimino correctamente','Eliminado correctamente');
  </script>
@endif
<div class="container">
<h1> Puestos de trabajo de {{$empresa->nombre}}</h1>
  <div class="row">
    @forelse($puestos as $puesto)
    <div class="col-md-4">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-primary"> Nombre del puesto: {{ $puesto->cargo->nombre }}</strong>
          <h3 class="mb-0">
          <a class="text-dark" href="#">Años de expeciencia: {{ $puesto->anios_experiencia }}</a>
          </h3>
          <div class="mb-1 text-muted"> Nombre del cargo: {{ $puesto->cargo->nombre }}</div>
          <div class="mb-1 text-muted"> Descripción del puesto: {{ $puesto->descripcion }}</div>
          <div class="row">
            <div class="col-md-6">
              <a class="create_edit btn btn-link" href="{{ route('puesto.edit', $puesto) }}"><i class="fas fa-edit">Editar</i></a>
            </div>
          </div>
        </div>
      <!-- <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"></rect><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg> -->
    </div>
  </div>
  @empty
  <div class="col-md-12">
    <h1 class="text-center"><i class="fas fa-user"></i>Sin Puestos</h1>
  </div>
  @endforelse

</div>

</div>
@include('puesto.modals.modal')

@endsection

