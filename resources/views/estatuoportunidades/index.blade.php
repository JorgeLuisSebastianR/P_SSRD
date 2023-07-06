@extends('layouts.app')
@section('content')
<center>
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h1>Estatus de las Oportunidades</h1>
    </div>
</div>
</center>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nombre de Proyecto</th>
      <th scope="col">fecha</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
  @foreach($estatuoportunidades as $estatuoportunidade)
    <tr>
      <th scope="row">{{$estatuoportunidade->Id_Oportunidad }} </th>
      <td>{{$estatuoportunidade->oportunidad->nombreProyecto}} </td>
      <td>{{$estatuoportunidade->fechaRevicio}} </td>
      <td>{{$estatuoportunidade->Estatus}} </td>

  </tbody>
  @endforeach
</table>

@endsection