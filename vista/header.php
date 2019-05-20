<div class="wrapper">
    <!--header-->
    <header class="main-header">

        <a href="FormAdmin.php"  class="logo">
            <!-- logo for regular state and mobile devices -->
            <span class="logo-mini">SE</span>
            <span class="logo-lg">SIEGRE</span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="	glyphicon glyphicon-menu-hamburger" style="color: #fff" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <!--aside-->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header"><center>Menu del Sistema</center></li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="FormAdmin.php" ><i class="glyphicon glyphicon-home"></i><span>Inicio</span></a></li>

                <li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">
                        <i class="fa fa-university"></i> <span>Programas</span></a>
                    <ul class="nav collapse sidebar-menu" id="submenu1" role="menu" aria-labelledby="btn-1">
                        <li><a href="FormRegistrarPrograma.php"><i class="fa fa-university" ></i> <span>Registrar Programas</span></a></li>
                        <li><a href="FormListarPrograma.php" ><i class="glyphicon glyphicon-list-alt"></i> <span>Listar Programas</span></a></li>
                    </ul>
                </li>
                <li><a href="#" id="btn-2" data-toggle="collapse" data-target="#submenu2" aria-expanded="false">
                        <i class="fa fa-graduation-cap"></i><span>Egresados</span></a>
                    <ul class="nav collapse sidebar-menu" id="submenu2" role="menu" aria-labelledby="btn-2">
                        <li><a href="FormRegistrarEgresado.php" ><i class="fa fa-user-plus"></i> <span>Registrar Egresado</span></a></li>
                        <li><a href="FormListarEgresado.php" ><i class="glyphicon glyphicon-list-alt"></i> <span>Listar Egresado</span></a></li>
                    </ul>
                </li>
                <li><a href="#" id="btn-3" data-toggle="collapse" data-target="#submenu3" aria-expanded="false">
                        <i class="fa fa-edit"></i> <span>Encuesta</span></a>
                    <ul class="nav collapse sidebar-menu" id="submenu3" role="menu" aria-labelledby="btn-3">
                        <li><a href="#" ><i class="fa fa-edit"></i> <span>Crear Encuesta</span></a></li>                          
                        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Listar Encuesta</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart"></i> <span>Resultados Encuesta</span></a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content  -->
    <div class="content-wrapper" id="contenido">