    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>{{ config('app.name', 'Laravel') }}</h3>
                <strong>PRO</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="{{'home'==request()->path()?'active':''}}">
                    <a href="{{ url('/home') }}">
                        <i class="fas fa-home"></i>
                        <b>Home</b>
                    </a>                    
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users"></i>
                        <b>Crear Usuario</b>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Estudiante</a>
                        </li>
                        <li>
                            <a href="#">Organizacion</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#Solicitudes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users"></i>
                        <b>Solicitudes</b>
                    </a>
                    <ul class="collapse list-unstyled" id="Solicitudes">
                        <li>
                            <a href="#">Servicio social</a>
                        </li>
                        <li>
                            <a href="#">Residencias profesional</a>
                        </li>
                    </ul>
                </li>
                
                
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        <b>Ayuda</b>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        <b>Contact</b>
                    </a>
                </li>
                <li class="{{'clientes'==Request::is('clientes*')?'active': ''}}">
                    <a href="">
                        <i class="fas fa-users"></i>
                        <b>Actualizar Info</b>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <!-- <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
        </div>-->
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
