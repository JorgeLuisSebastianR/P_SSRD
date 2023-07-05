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
  @foreach($oportunidades as $oportunidad)
    <tr>
      <th scope="row"> {{$oportunidad->Id_Oportunidad}} </th>
      <td> {{$oportunidad->nombreProyecto}} </td>
      <td> {{$oportunidad->Descripcion}} </td>
      <td> {{$oportunidad->Requisitos}} </td>
      <td> {{$oportunidad->Tipo}} </td>
      <td> {{$oportunidad->fechaInicio}} </td>
      <td>
        <a href="{{route('solicitudOrgs.show',$oportunidad->Id_Oportunidad)}}" class="btn btn-primary"> <i class="fas fa-eye">       </i></a>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection