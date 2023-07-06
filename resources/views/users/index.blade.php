@extends('layouts.app')
@section('content')

<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h1>usuarios</h1>
    </div>
    <div class="card-header d-inline-flex">
    <a href="{{route('users.create')}}" class="btn btn-warning">
        <i class="fa fa-plus-square" ></i>
        agregar</a>
    </div>

    <table class="table table-bordered ">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
    <th scope="row">{{$user->id}}   </th>
      <td>{{$user->name}}   </td>
      <td>{{$user->email}}   </td>
      <td>{{$user->password}}   </td>
      <td>
        <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i></a>
        <a href="{{route('users.destroy', $user->id)}}" class="btn btn-danger" onclick="event.preventDefault();
            if (confirm('¿Estás seguro de que deseas eliminar esta oportunidad?')) {
                document.getElementById('delete-form').submit();
            }">
    <i class="fas fa-trash-alt"></i>
</a>

<form id="delete-form"
      action="{{ route('users.destroy', $user->id) }}"
      method="POST"
      style="display: none;">
    @csrf
    @method('DELETE')
</form>

        </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection