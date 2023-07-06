@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SAF') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2 class="text-center">¡Bienvenido al panel de control, {{ Auth::user()->name }}!</h2>
                    <p class="text-center">¡Estás conectado! ^^</p>

                    <div class="text-center mt-4">
                        <h4></h4>
                        <p>Navega por las distintas opciones que tenemos para ti!.</p>
                    </div>

                    <div class="text-center mt-4">
                        <canvas id="grafica"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Obtener el contexto del lienzo de la gráfica
    var ctx = document.getElementById('grafica').getContext('2d');

    // Datos de ejemplo para la gráfica de barras
    var data = {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
        datasets: [{
            label: 'Empresas relacionadas',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    // Opciones de configuración de la gráfica
    var options = {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Crear la gráfica de barras
    var chart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>
@endsection
