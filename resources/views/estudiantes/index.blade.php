@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h1>Alumnos</h1>
    </div>
    <div class="card-header d-inline-flex">
    <a href="{{ route('estudiantes.create') }}" class="btn btn-success">
        <i class="fa fa-plus-square"></i>
        Agregar</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Número de Control</th>
                <th scope="col">Carrera</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Usuario</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiante)
            <tr>
                <th scope="row">{{ $estudiante->Id_Estudiante }}</th>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->apellidoPaterno }}</td>
                <td>{{ $estudiante->numControl }}</td>
                <td>{{ $estudiante->carrera }}</td>
                <td>{{ $estudiante->telefono }}</td>
                <td>{{ $estudiante->id }}</td>
                <td>
                    <a href="{{ route('estudiantes.show', $estudiante->Id_Estudiante) }}" class="btn btn-primary">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('estudiantes.edit', $estudiante->Id_Estudiante) }}" class="btn btn-primary">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="{{ route('estudiantes.destroy', $estudiante->Id_Estudiante) }}" class="btn btn-danger" onclick="event.preventDefault();
                    if (confirm('¿Estás seguro de que deseas eliminar este estudiante?')) {
                        document.getElementById('delete-form-{{ $estudiante->Id_Estudiante }}').submit();
                    }">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                    <form id="delete-form-{{ $estudiante->Id_Estudiante }}" action="{{ route('estudiantes.destroy', $estudiante->Id_Estudiante) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
