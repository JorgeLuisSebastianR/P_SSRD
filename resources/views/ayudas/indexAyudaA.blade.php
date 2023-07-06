@extends('layouts.app')
@section('content')

<div class="card mt-3">
    <div class="card-header d-inline-flex" ><h2>Ayuda</h2></div>

    <div>
    <table class="table">
        <thead class="table-dark table-striped" >
        <tr> 
            <th>Problema</th>
            <th>Solucion</th>
        </tr>
        </thead>

        <tbody>

        <tr>
            <td>Lentitud en la carga de página?</td>
            <td>
            <ul>
                <li>Comprueba tu conexión a Internet.</li>
                <li> Asegúrate de que tu computadora esté conectada a una red por cable o Wi-Fi.</li>
                <li>Borra la caché es posible tenga información almacenada que impide que se cargue la página.</li>
                <li>Cierra otras pestañas, extensiones y apps.</li>
            </ul>
            </td>
        </tr>

        <tr>
        <td>No realiza una accio de capacidad de respuesta?</td>
        <td>
            <ul>
                <li></li>
            </ul>
        </td>
        </tr>

        <tr>
            <td>Problema de seguridad?</td>
            <td>
                <ul>
                    <li></li>
                </ul>

            </td>
        </tr>

        <tr>
            <td>Sugerencias?</td>
            <td>
                <ul>
                    <li>Si tiene una sugerencia póngase en contacto con la institución a través del apartado <b>contac</b> e infórmelo</li>
                </ul>

            </td>
        </tr>

        <tr>
            <td>Información sobre los desarrolladores?</td>
            <td>
                <ul>
                    <li>La aplicación web fue desarrollada como parte de un proyecto por alumnos sin embargo los derechos son pertenecientes al Instituto Tecnológico Superior de Teziutlán.</li>
                </ul>

            </td>
        </tr>

        </tbody>
    </table>
    </div>

</div>

@endsection