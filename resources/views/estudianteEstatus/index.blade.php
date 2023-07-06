@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <h1>Solicitudes de Empresas</h1>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Solicitud</th>
                <th scope="col">Empresa</th>
                <th scope="col">Fecha de Revisión</th>
                <th scope="col">Estatus</th>
                <th scope="col">Fecha de Creación</th>
                <th scope="col">Fecha de Actualización</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solicitudOrgs as $solicitud)
                <tr>
                    <th scope="row">{{ $solicitud->Id_SolicitudEmpresa }}</th>
                    <td>{{ $solicitud->solicitud->Id_Solicitud }}</td>
                    <td>{{ $solicitud->empresa->Id_Empresa }}</td>
                    <td>{{ $solicitud->fechaRevision }}</td>
                    <td>{{ $solicitud->Estatus }}</td>
                    <td>{{ $solicitud->created_at }}</td>
                    <td>{{ $solicitud->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
