<form class="form_create_edit was-validated" method="POST" action="{{ route('puesto.update', $puesto) }}">
  @method('PUT')
  @include('puesto.form')
</form>
