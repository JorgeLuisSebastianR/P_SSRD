@extends('layouts.app')
@section('content')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h1>Oportunidades</h1>
    </div>
    <div class="card-header d-inline-flex">
    <a href="{{route('oportunidades.create')}}" class="btn btn-success">
        <i class="fa fa-plus-square" ></i>
        agregar</a>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nombre de Proyecto</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Requisitos</th>
      <th scope="col">Tipo</th>
      <th scope="col">fecha de inicio </th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($oportunidades as $oportunidad)
    <tr>
      <th scope="row"> {{$oportunidad->Id_Oportunidad}} </th>
      <td> {{$oportunidad->nombreProyecto}} </td>
      <td> {{$oportunidad->Descripcion}} </td>
      <td> {{$oportunidad->Requisitos}} </td>
      <td> {{$oportunidad->Tipo}} </td>
      <td> {{$oportunidad->fechaInicio}} </td>
      <td>
        <a href="{{route('oportunidades.show',$oportunidad->Id_Oportunidad)}}" class="btn btn-primary"> <i class="fas fa-eye">       </i></a>
        <a href="{{route('oportunidades.edit',$oportunidad->Id_Oportunidad)}}" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i></a>
        <a href="{{route('oportunidades.destroy', $oportunidad->Id_Oportunidad)}}" class="btn btn-danger" onclick="event.preventDefault();
            if (confirm('¿Estás seguro de que deseas eliminar esta oportunidad?')) {
                document.getElementById('delete-form').submit();
            }">
    <i class="fas fa-trash-alt"></i>
</a>

<form id="delete-form"
      action="{{ route('oportunidades.destroy', $oportunidad->Id_Oportunidad) }}"
      method="POST"
      style="display: none;">
    @csrf
    @method('DELETE')
</form>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection