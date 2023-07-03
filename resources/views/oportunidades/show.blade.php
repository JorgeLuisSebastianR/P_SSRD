@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                oportunidad: {{ $oportunidad->Id_Empresa}}
            </div>
            <div class="card-body">
                <p><strong>Empresa:       </strong> {{ $oportunidad->Id_Empresa }}</p>
                <p><strong>Descripcion:   </strong> {{ $oportunidad->Descripcion}}</p>
                <p><strong>Requisitos:    </strong> {{ $oportunidad->Requisitos}}</p>
                <p><strong>Duracion:      </strong> {{ $oportunidad->Duracion}}</p>
                <p><strong>Perfil:        </strong> {{ $oportunidad->Perfil }}</p>
                <p><strong>Tipo:          </strong> {{ $oportunidad->Tipo }}</p>
                
            </div>

            <a href="{{ route('oportunidades.index') }}" class="btn btn-sucess">
            <i class="fa-solid fa-plus"></i>
            Regresar
        </a>
        </div>
    </div>
@endsection