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
        

                <form action="{{--route('solicitudOrgs.store')--}}" method="POST" enctype="multipart/form-data" id="create">
                    @include('solicitudes\partials\from')
                </form>
            </div>

            <a href="{{route('solicitudes.index')}}" class="btn btn-success">
                <i class="fa-solid fa-plus"></i>
                Regresar
            </a>
        </div>
    </div>
@endsection

