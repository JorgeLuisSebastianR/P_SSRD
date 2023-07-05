@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Nombre Proyecto: {{ $oportunidad->Id_Empresa}}
            </div>
            <div class="card-body">
                <p><strong>Descripcion:</strong> {{ $oportunidad->Descripcion}}</p>
                <p><strong>Requisitos:</strong> {{ $oportunidad->Requisitos}}</p>
                <p><strong>Tipo:</strong> {{ $oportunidad->Tipo}}</p>
                <p><strong>Fecha de Inicio:</strong> {{ $oportunidad->fechaInicio }}</p>
                <p><strong>Fecha de culminacion:</strong> {{ $oportunidad->fechaFin }}</p>
                <p><strong>Registro del proyecto:</strong> {{ $oportunidad->created_at }}</p>

                <form action="{{route('solicitudOrgs.store')}}" method="POST" enctype="multipart/form-data" id="create">
                    @include('solicitudOrgs\partials\from')

                    <div class="btn-group" role="group" aria-label="Aceptar o Rechazar">
                        <button type="submit" name="Estatus" value="aceptada" class="btn btn-success">Aceptar</button>
                        <button type="submit" name="Estatus" value="rechazada" class="btn btn-danger">Rechazar</button>
                    </div>
                </form>
            </div>

            <a href="{{ route('solicitudOrgs.index') }}" class="btn btn-success">
                <i class="fa-solid fa-plus"></i>
                Regresar
            </a>
        </div>
    </div>
@endsection
