@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h1>Formulario para crear una empresa</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('empresas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Nombre">Nombre:</label>
                <input type="text" class="form-control" name="Nombre" required>
            </div>
            <div class="form-group">
                <label for="Sector">Sector:</label>
                <input type="text" class="form-control" name="Sector" required>
            </div>
            <div class="form-group">
                <label for="Ubicacion">Ubicación:</label>
                <input type="text" class="form-control" name="Ubicacion" required>
            </div>
            <div class="form-group">
                <label for="Descripcion">Descripción:</label>
                <textarea class="form-control" name="Descripcion" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="id">ID Usuario:</label>
                <select class="form-control" name="id" required>
                    <option value="">Seleccionar usuario</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>
@endsection
