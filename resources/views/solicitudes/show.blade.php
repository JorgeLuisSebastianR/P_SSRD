@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Nombre  del Proyecto: {{$solicitudOrgs->oportunidad->nombreProyecto}}
            </div>
            <div class="card-body">
                <p><strong>Descripcion:</strong>            {{$solicitudOrgs->oportunidad->Descripcion}}</p>
                <p><strong>Requisitos:</strong>             {{$solicitudOrgs->oportunidad->Requisitos}}</p>
                <p><strong>Tipo:</strong>                   {{$solicitudOrgs->oportunidad->Tipo}}</p>
                <p><strong>Fecha de Inicio:</strong>        {{$solicitudOrgs->oportunidad->fechaInicio}}</p>
                <p><strong>Fecha de culminacion:</strong>   {{$solicitudOrgs->oportunidad->fechaFin}}</p>
            </div>

            <a href="{{route('solicitudes.index')}}" class="btn btn-success">
            Regresar
            </a>
        </div>
    </div>
@endsection

