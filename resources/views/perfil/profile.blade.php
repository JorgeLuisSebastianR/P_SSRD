@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Perfil</div>

            <div class="card-body profile-card">
                <h5>{{ $user->name }}</h5>
                <div class="profile-icon">
                    @if($user->tipo == 'Admin')
                        <i class="fas fa-user-shield"></i>
                    @elseif($user->tipo == 'Empresa')
                        <i class="fas fa-building"></i>
                    @elseif($user->tipo == 'Estudiante')
                        <i class="fas fa-user-graduate"></i>
                    @endif
                </div>
                <ul>
                        <li><strong>Nombre:</strong> {{ $user->name }}</li>
                        <li><strong>Email:</strong> {{ $user->email }}</li>
                        <li><strong>Tipo:</strong> {{ $user->tipo }}</li>
                    </ul>
            </div>
        </div>
    </div>
@endsection

