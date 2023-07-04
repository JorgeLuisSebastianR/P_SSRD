@extends('layouts.app')
@section('content')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h1>Alumnos</h1>
    </div>
    <div class="card-header d-inline-flex">
    <a href="{{route('estudiantes.create')}}" class="btn btn-success">
        <i class="fa fa-plus-square" ></i>
        agregar</a>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">numControl</th>
      <th scope="col">carrera</th>
      <th scope="col">telefono </th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  @foreach($estudiantes as $estudiante)
  <tbody>
    <tr>
      <th scope="row"> {{$estudiante->Id_Estudiante}} </th>
      <td>{{$estudiante->Nombre}} </td>
      <td>{{$estudiante->ApellidoPaterno}}</td>
      <td>{{$estudiante->numControl}}</td>
      <td>{{$estudiante->carrera}}</td>
      <td>{{$estudiante->telefono}}</td>
      <td>
        <a href="{{--route('oportunidades.show',$oportunidad->Id_Oportunidad)--}}" class="btn btn-primary"> <i class="fas fa-eye">       </i></a>
        <a href="{{--route('oportunidades.edit',$oportunidad->Id_Oportunidad)--}}" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i></a>
        <a href="{{--route('oportunidades.destroy', $oportunidad->Id_Oportunidad)--}}" class="btn btn-danger" onclick="event.preventDefault();
            if (confirm('¿Estás seguro de que deseas eliminar esta oportunidad?')) {
                document.getElementById('delete-form').submit();}">
                <i class="fas fa-trash-alt"></i>
        </a>
        <form id="delete-form"
            action="{{--route('oportunidades.destroy', $oportunidad->Id_Oportunidad)--}}"
            method="POST"
            style="display: none;">
            @csrf
            @method('DELETE')
        </form>
        </td>
        @endforeach 
  </tbody>
</table>
@endsection