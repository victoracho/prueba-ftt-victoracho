@csrf
<fieldset class="form-group">
  <label for="code">Años de experiencia requerida</label>
  <input type="text" class="form-control" id="anios_experiencia" name="anios_experiencia" required value="{{ old('name', $puesto->anios_experiencia) }}">
</fieldset>
<fieldset class="form-group">
  <label for="name">Cargo a escoger</label>
  <select class="form-control" name="cargo_id">
    @foreach ($cargos as $cargo)
        <option value="{{ $cargo->id }}"
        @if ($cargo->id == old('cargo_id', $puesto->cargo_id))
            selected="selected"
        @endif
        >{{ $cargo->nombre }}
        </option>
    @endforeach
</select>
</fieldset>

<fieldset class="form-group">
  <label for="code">Descripción del puesto de trabajo</label>
  <input type="text" class="form-control" id="descripcion" name="descripcion" required value="{{ old('name', $puesto->descripcion) }}">
  <input type="hidden" class="form-control" id="empresa_id" name="empresa_id" required value="{{ Auth::user()->empresa->id }}">
</fieldset>

<div class="text-center">
  <button class="btn btn-primary" type="submit">Enviar</button>
</div>
