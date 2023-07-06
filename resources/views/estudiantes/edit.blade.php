@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h1>Formulario para editar estudiante</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('estudiantes.update', $estudiante->Id_Estudiante) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="{{ $estudiante->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input type="text" class="form-control" name="apellidoPaterno" value="{{ $estudiante->apellidoPaterno }}" required>
            </div>
            <div class="form-group">
                <label for="apellidoMaterno">Apellido Materno:</label>
                <input type="text" class="form-control" name="apellidoMaterno" value="{{ $estudiante->apellidoMaterno }}" required>
            </div>
            <div class="form-group">
                <label for="numControl">Número de Control:</label>
                <input type="text" class="form-control" name="numControl" value="{{ $estudiante->numControl }}" required>
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="datetime-local" class="form-control" name="fechaNacimiento" value="{{ $estudiante->fechaNacimiento }}" required>
            </div>
            <div class="form-group">
                <label for="genero">Género:</label>
                <select class="form-control" name="genero" required>
                    <option value="Hombre" {{ $estudiante->genero == 'Hombre' ? 'selected' : '' }}>Hombre</option>
                    <option value="Mujer" {{ $estudiante->genero == 'Mujer' ? 'selected' : '' }}>Mujer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="carrera">Carrera:</label>
                <select class="form-control" name="carrera" required>
                    <option value="Ingeniero en Animación Digital y Efectos Visuales" {{ $estudiante->carrera == 'Ingeniero en Animación Digital y Efectos Visuales' ? 'selected' : '' }}>Ingeniero en Animación Digital y Efectos Visuales</option>
                    <option value="Ingeniería Industrial" {{ $estudiante->carrera == 'Ingeniería Industrial' ? 'selected' : '' }}>Ingeniería Industrial</option>
                    <option value="Ingeniería en Industrias Alimentarias" {{ $estudiante->carrera == 'Ingeniería en Industrias Alimentarias' ? 'selected' : '' }}>Ingeniería en Industrias Alimentarias</option>
                    <option value="Ingeniería Informática" {{ $estudiante->carrera == 'Ingeniería Informática' ? 'selected' : '' }}>Ingeniería Informática</option>
                    <option value="Ingeniería Mecatrónica" {{ $estudiante->carrera == 'Ingeniería Mecatrónica' ? 'selected' : '' }}>Ingeniería Mecatrónica</option>
                    <option value="Ingeniería en Sistemas Computacionales" {{ $estudiante->carrera == 'Ingeniería en Sistemas Computacionales' ? 'selected' : '' }}>Ingeniería en Sistemas Computacionales</option>
                    <option value="Ingeniería en Gestión Empresarial" {{ $estudiante->carrera == 'Ingeniería en Gestión Empresarial' ? 'selected' : '' }}>Ingeniería en Gestión Empresarial</option>
                    <option value="Licenciatura en Turismo" {{ $estudiante->carrera == 'Licenciatura en Turismo' ? 'selected' : '' }}>Licenciatura en Turismo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" name="telefono" value="{{ $estudiante->telefono }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection

