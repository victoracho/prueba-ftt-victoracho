@csrf
<fieldset class="form-group">
  <label for="code">Nombre</label>
  <input type="text" class="form-control" id="nombre" name="nombre" required value="{{ old('name', $empresa->nombre) }}">
</fieldset>
<fieldset class="form-group">
  <label for="name">Descripción de la empresa</label>
  <input type="text" class="form-control" id="descripcion" name="descripcion" required value="{{ old('name', $empresa->descripcion) }}">
</fieldset>
<fieldset class="form-group">
  <label for="name">Número de teléfono</label>
  <input type="text" class="form-control" id="numeroTelefono" name="numeroTelefono" required value="{{ old('name', $empresa->numeroTelefono) }}">
</fieldset>
<fieldset class="form-group">
  <label for="name">Razón Social</label>
  <input type="text" class="form-control" id="RazonSocial" name="razonSocial" required value="{{ old('name', $empresa->razonSocial) }}">
</fieldset>
<fieldset class="form-group">
  <label for="name">Rif</label>
  <input type="text" class="form-control" id="rif" name="rif" required value="{{ old('name', $empresa->rif) }}">
</fieldset>
<fieldset class="form-group">
  <label for="name">Descripción de la empresa</label>
  <input type="text" class="form-control" id="numeroTelefono" name="numeroTelefono" required value="{{ old('name', $empresa->numeroTelefono) }}">
</fieldset>
<fieldset class="form-group">
  <label for="name">Correo de la empresa</label>
  <input type="text" class="form-control" id="correo" name="correo" required value="{{ old('name', $empresa->correo) }}">
  <input type="hidden" class="form-control" id="user_id" name="user_id" required value="{{ Auth::user()->id }}">
</fieldset>

<div class="text-center">
  <button class="btn btn-primary" type="submit">Enviar</button>
</div>
