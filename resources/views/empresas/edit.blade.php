@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h1>Formulario para editar empresa</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('empresas.update', $empresa->Id_Empresa) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Nombre">Nombre:</label>
                <input type="text" class="form-control" name="Nombre" value="{{ $empresa->Nombre }}" required>
            </div>
            <div class="form-group">
                <label for="Sector">Sector:</label>
                <input type="text" class="form-control" name="Sector" value="{{ $empresa->Sector }}" required>
           
            </div>
            <div class="form-group">
                <label for="Ubicacion">Ubicación:</label>
                <input type="text" class="form-control" name="Ubicacion" value="{{ $empresa->Ubicacion }}" required>
            </div>
            <div class="form-group">
                <label for="Descripcion">Descripción:</label>
                <textarea class="form-control" name="Descripcion" rows="4" required>{{ $empresa->Descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="id">ID Usuario:</label>
                <select class="form-control" name="id" required>
                    <option value="">Seleccionar usuario</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $empresa->id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
