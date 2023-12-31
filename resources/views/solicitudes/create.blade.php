@extends('layouts.app')
@section('content')
<div class="card mt-3">
    <center>
    <div class="card-footer">
        <h5>Formulario para crear un Alumno</h5>
    </div>
    </center>
    <div class="card-header d-inline-flex"></div>
    
    <div class="card-header d-inline-flex">
        <a href="{{route('solicitudes.index')}}" class="btn btn-success">
            <i class="fa-solid fa-arrow-turn-down-left" >Volver</i>     
        </a>
    </div>


    <div class="card-body">
        <form action="{{route('solicitudes.store')}}" method="POST" enctype="multipart/form-data" id="create">
            @include('solicitudes\partials\from')
        </form>

    </div>


    <div class="card-footer">
<!--en el form se especifica con cual formulario se va a trabajar-->
        <button class="btn btn-primary" form="create">
            <i class="fas fa-plus"></i>
            Crear
        </button>
    </div>




@endsection