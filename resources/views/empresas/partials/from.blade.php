@csrf
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="Nombre" value="{{ isset($empresa) ? $empresa->Nombre : old('Nombre') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="sector">Sector:</label>
            <input type="text" class="form-control" name="Sector" value="{{ isset($empresa) ? $empresa->Sector : old('Sector') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="ubicacion">Ubicación:</label>
            <input type="text" class="form-control" name="Ubicacion" value="{{ isset($empresa) ? $empresa->Ubicacion : old('Ubicacion') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" name="Descripcion" rows="4" required>{{ isset($empresa) ? $empresa->Descripcion : old('Descripcion') }}</textarea>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="user_id">Usuario:</label>
            <select class="form-control" name="id" required>
                <option value="">Seleccionar usuario</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ isset($empresa) && $empresa->id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
