@extends('layouts.app')

@section('content')
@csrf

<div class="row">

    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="nombre" readonly
                value="{{ isset($estudiante) ? $estudiante->nombre : old('nombre') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Apellido Paterno:</label>
            <input type="text" class="form-control" name="apellidoPaterno" readonly
                value="{{ isset($estudiante) ? $estudiante->apellidoPaterno : old('apellidoPaterno') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Apellido Materno:</label> 
            <input type="text" class="form-control" name="apellidoMaterno" readonly
                value="{{ isset($estudiante) ? $estudiante->apellidoMaterno : old('apellidoMaterno') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Número de Control:</label> 
            <input type="text" class="form-control" name="numControl" readonly
                value="{{ isset($estudiante) ? $estudiante->numControl : old('numControl') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group"> 
            <label for="">Fecha de Nacimiento:</label>
            <input type="datetime-local" class="form-control" name="fechaNacimiento" readonly
                value="{{ isset($estudiante) ? $estudiante->fechaNacimiento : old('fechaNacimiento') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Género:</label>
            <input type="text" class="form-control" name="genero" readonly
                value="{{ isset($estudiante) ? $estudiante->genero : old('genero') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Carrera:</label>
            <input type="text" class="form-control" name="carrera" readonly
                value="{{ isset($estudiante) ? $estudiante->carrera : old('carrera') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Teléfono:</label>
            <input type="tel" class="form-control" name="telefono" readonly
                value="{{ isset($estudiante) ? $estudiante->telefono : old('telefono') }}" required>
        </div>
    </div>

</div>

@endsection
