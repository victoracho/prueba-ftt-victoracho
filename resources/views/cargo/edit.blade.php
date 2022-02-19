<form class="form_create_edit was-validated" method="POST" action="{{ route('cargo.update', $cargo) }}">
  @method('PUT')
  @include('cargo.form')
</form>
