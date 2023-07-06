@csrf

<div class="row">

    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="nombre"
                value="{{ isset($estudiante) ? $estudiante->nombre : old('nombre') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Apellido Paterno:</label>
            <input type="text" class="form-control" name="apellidoPaterno"
                value="{{ isset($estudiante) ? $estudiante->apellidoPaterno : old('apellidoPaterno') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Apellido Materno:</label>
            <input type="text" class="form-control" name="apellidoMaterno"
                value="{{ isset($estudiante) ? $estudiante->apellidoMaterno : old('apellidoMaterno') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Número de Control:</label>
            <input type="text" class="form-control" name="numControl"
                value="{{ isset($estudiante) ? $estudiante->numControl : old('numControl') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Fecha de Nacimiento:</label>
            <input type="datetime-local" class="form-control" name="fechaNacimiento"
                value="{{ isset($estudiante) ? $estudiante->fechaNacimiento : old('fechaNacimiento') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Género:</label>
            <select class="form-control" name="genero" required>
                <option value="">Seleccionar género</option>
                @foreach($generos as $genero)
                <option value="{{ $genero }}" {{ isset($estudiante) && $estudiante->genero == $genero ? 'selected' : '' }}>
                    {{ $genero }}
                </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Carrera:</label>
            <select class="form-control" name="carrera" required>
                <option value="">Seleccionar carrera</option>
                @foreach($carreras as $carrera)
                <option value="{{ $carrera }}" {{ isset($estudiante) && $estudiante->carrera == $carrera ? 'selected' : '' }}>
                    {{ $carrera }}
                </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Teléfono:</label>
            <input type="tel" class="form-control" name="telefono"
                value="{{ isset($estudiante) ? $estudiante->telefono : old('telefono') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Usuario:</label>
            <select class="form-control" name="id" required>
                <option value="">Seleccionar usuario</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}" {{ isset($estudiante) && $estudiante->id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

</div>

