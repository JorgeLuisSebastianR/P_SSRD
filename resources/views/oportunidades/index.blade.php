@extends('layouts.app')
@section('content')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h1>Oportunidades</h1>
    </div>
    <div class="card-header d-inline-flex">
    <a href="{{--route('clientes.create')--}}" class="btn btn-success">
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
      <th scope="col">Direccion</th>
      <th scope="col">fecha de inicio </th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">  </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td>
        <a href="" class="btn btn-primary"> <i class="fas fa-eye">       </i></a>
        <a href="" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i></a>
    
    </tr>
  </tbody>
</table>
@endsection