@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <center>
        <div class="card-footer">
            <h5>Formulario crear un usuario</h5>
        </div>
    </center>
    <div class="card-header d-inline-flex"></div>

    <div class="card-header d-inline-flex">
        <a href="{{route('users.index')}}" class="btn btn-success">
            <i class="fa-solid fa-arrow-turn-down-left">Volver</i>
        </a>
    </div>

    <div class="card-body">
        <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data" id="create">
            @include('users.partials.from')
        </form>
    </div>

    <div class="card-footer">
        <center>
            <!-- En el formulario se especifica con cuál formulario se va a trabajar -->
            <button class="btn btn-primary" form="create">
                <i class="fas fa-plus"></i>Crear
            </button>
        </center>
    </div>
@endsection