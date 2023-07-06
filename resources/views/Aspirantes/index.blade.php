@extends('layouts.app')
@section('content')
<center>
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h1>Solicitud de Aspirantes</h1>
    </div>
</div>
</center>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nombre de proyecto</th>
      <th scope="col">Nombre de Alumno</th>
      <th scope="col">habilidades</th>
      <th scope="col">semestre</th>
      <th scope="col">Fecha de solisitud</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  @foreach($solicitudes as $solicitude)
    <tr>
      <th scope="row">{{$solicitude->Id_Solicitud}}</th>
      <td>{{$solicitude->Id_Estudiante }} </td>
      <td>{{$solicitude->Semestre }}                   </td>
      <td>{{$solicitude->idCliente}}                   </td>
      <td>{{$solicitude->Fecha}}                   </td>
      <td>{{$solicitude->Fecha}}                   </td>
      <td>{{$solicitude->Fecha}}                   </td>
      @endforeach
  </tbody>
</table>

@endsection