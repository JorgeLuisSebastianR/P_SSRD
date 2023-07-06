@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h1>Formulario para crear un estudiante</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('estudiantes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input type="text" class="form-control" name="apellidoPaterno" required>
            </div>
            <div class="form-group">
                <label for="apellidoMaterno">Apellido Materno:</label>
                <input type="text" class="form-control" name="apellidoMaterno" required>
            </div>
            <div class="form-group">
                <label for="numControl">Número de Control:</label>
                <input type="text" class="form-control" name="numControl" required>
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="datetime-local" class="form-control" name="fechaNacimiento" required>
            </div>
            <div class="form-group">
                <label for="genero">Género:</label>
                <select class="form-control" name="genero" required>
                    <option value="">Seleccionar género</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="carrera">Carrera:</label>
                <select class="form-control" name="carrera" required>
                    <option value="">Seleccionar carrera</option>
                    <option value="Ingeniero en Animación Digital y Efectos Visuales">Ingeniero en Animación Digital y Efectos Visuales</option>
                    <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                    <option value="Ingeniería en Industrias Alimentarias">Ingeniería en Industrias Alimentarias</option>
                    <option value="Ingeniería Informática">Ingeniería Informática</option>
                    <option value="Ingeniería Mecatrónica">Ingeniería Mecatrónica</option>
                    <option value="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</option>
                    <option value="Ingeniería en Gestión Empresarial">Ingeniería en Gestión Empresarial</option>
                    <option value="Licenciatura en Turismo">Licenciatura en Turismo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <select class="form-control" name="usuario" required>
                    <option value="">Seleccionar usuario</option>
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" name="telefono" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>
@endsection
