<nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="/">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto" focusable="false" role="img"><title>Empresa</title><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="{{ route('empresa.index') }}">Empresas</a>
    <a class="py-2 d-none d-md-inline-block" href="{{ route('cargo.index') }}">Cargos</a>
  @guest
    <a class="py-2 d-none d-md-inline-block" href="{{ route('login') }}">Iniciar sesión</a>
    <a class="py-2 d-none d-md-inline-block" href="{{ route('register') }}">Registrarse</a>
  @else

    @if(auth()->user())
      @if(!auth()->user()->empresa->id)
        <a class="py-2 d-none d-md-inline-block create_edit" href="{{ route('empresa.create') }}">Crear empresa para empezar</a>
      @endif 
    @endif
    <a class="py-2 d-none d-md-inline-block create_edit_puesto" href="{{ route('puesto.create') }}">Crear nuevo puesto de trabajo</a>
    <a class="py-2 d-none d-md-inline-block create_edit_cargo" href="{{ route('cargo.create') }}">Crear nuevo cargo</a>
    <a class="py-2 d-none d-md-inline-block" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      $('#salir').submit();">
      Cerrar sesión
    </a>
    <form id="salir" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
  @endguest

</div>
</nav>
