@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h1>Empresas</h1>
    </div>
    <div class="card-body">
        <a href="{{ route('empresas.create') }}" class="btn btn-success mb-3">
            <i class="fa fa-plus-square"></i> Agregar</a>
        <a href="{{route('empresas.pdf')}}"  class="btn btn-outline-success">
            <i class="fas fa-pencil-alt"></i> Descargar PDF </a>
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Sector</th>
                    <th scope="col">Ubicación</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">ID Usuario</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empresas as $empresa)
                <tr>
                    <th scope="row">{{ $empresa->Id_Empresa }}</th>
                    <td>{{ $empresa->Nombre }}</td>
                    <td>{{ $empresa->Sector }}</td>
                    <td>{{ $empresa->Ubicacion }}</td>
                    <td>{{$empresa->Descripcion }}</td>
                    <td>{{ $empresa->id }}</td>
                    <td>
                        <a href="{{ route('empresas.edit', $empresa->Id_Empresa) }}" class="btn btn-primary">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('empresas.destroy', $empresa->Id_Empresa) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta empresa?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
