@csrf
<fieldset class="form-group">
  <label for="code">Nombre del cargo</label>
  <input type="text" class="form-control" id="nombre" name="nombre" required value="{{ old('nombre', $cargo->nombre) }}">
</fieldset>

<div class="text-center">
  <button class="btn btn-primary" type="submit">Enviar</button>
</div>
