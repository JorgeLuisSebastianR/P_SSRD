@extends('layouts.app')
@section('content')

<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h2>Ayuda</h2>
    </div>

    <div>
        <table class="table">
            <thead class="table-dark table-striped">
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
                            <li>Asegúrate de que tu computadora esté conectada a una red por cable o Wi-Fi.</li>
                            <li>Borra la caché es posible tenga información almacenada que impide que se cargue la
                                página.</li>
                            <li>Cierra otras pestañas, extensiones y apps.</li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td>No realiza una accion de respuesta sobre los usuarios?</td>
                    <td>
                        <ul>
                            <li>Si tiene una problema póngase en contacto con la institución a través del apartado
                                <b>contac</b> e infórmelo explicando claramente el problema de falta de capacidad de
                                respuesta que has encontrado. Proporciona detalles sobre los dispositivos y navegadores
                                en los que has experimentado el problema, adjunta las capturas de pantalla o el video si
                                es posible, y proporciona cualquier otra información relevante.</li>
                            <li>Si la información que se ingrese para crear los usuarios Estudiante o Empresa no esta comple no se podra crear.</li> 
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td>Problema de seguridad?</td>
                    <td>
                        <ul>
                            <li>Si consideras que la página web presenta un problema de seguridad, notifícalo a los responsables del sitio en el apartado de <b>contac</b>.</li>
                        </ul>

                    </td>
                </tr>

                <tr>
                    <td>Sugerencias?</td>
                    <td>
                        <ul>
                            <li>Si tiene una sugerencia póngase en contacto con la institución a través del apartado
                                <b>contac</b> e infórmelo.</li>
                        </ul>

                    </td>
                </tr>

                <tr>
                    <td>Información sobre los desarrolladores?</td>
                    <td>
                        <ul>
                            <li>La aplicación web fue desarrollada como parte de un proyecto por alumnos sin embargo los
                                derechos son pertenecientes al Instituto Tecnológico Superior de Teziutlán.</li>
                        </ul>

                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

@endsection