@extends('layouts.app')
@section('content')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h1>Solicitudes de las Organizaciones</h1>
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
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  @foreach($solicitudOrgs as $solicitudOrg)
    <tr>
      <th scope="row"> {{$solicitudOrg->Id_OportunidadValidador}} </th>
      <td> {{$solicitudOrg->oportunidad->nombreProyecto}} </td>
      <td> {{$solicitudOrg->oportunidad->Descripcion}} </td>
      <td> {{$solicitudOrg->oportunidad->Requisitos}}</td>
      <td> {{$solicitudOrg->oportunidad->Tipo}} </td>
      <td> {{$solicitudOrg->oportunidad->fechaInicio}} </td>
      <td>
        <a href="{{route('solicitudes.show',$solicitudOrg->Id_OportunidadValidador)}}" class="btn btn-primary"> <i class="fas fa-eye">       </i></a>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection