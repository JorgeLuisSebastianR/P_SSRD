@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Nombre Proyecto: {{ $oportunidad->Id_Empresa}}
            </div>
            <div class="card-body">
                <p><strong>Descripcion:             </strong> {{ $oportunidad->Descripcion}}</p>
                <p><strong>Requisitos:              </strong> {{ $oportunidad->Requisitos}}</p>
                <p><strong>Tipo:                    </strong> {{ $oportunidad->Tipo}}</p>
                <p><strong>fecha de Inicio:         </strong> {{ $oportunidad->fechaInicio }}</p>
                <p><strong>fecha de culminacion:    </strong> {{ $oportunidad->fechaFin }}</p>
                <p><strong>registro del proyecto:   </strong> {{ $oportunidad->created_at }}</p>
            </div>

            <a href="{{ route('oportunidades.index') }}" class="btn btn-sucess">
            <i class="fa-solid fa-plus"></i>
            Regresar
        </a>
        </div>
    </div>
@endsection