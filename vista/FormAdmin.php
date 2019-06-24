<?php
session_start();
if (($_SESSION['mail']) != '') {
    ?>
    <!-- Content Header (Page header) -->
    <?php include './head.php'; ?>
    <?php include './header.php'; ?>                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <center>
                Administrador<br>
                <small>Seleccion una Opción</small>
            </center>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">

                        <p>Programas</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-university"></i>
                    </div>
                    <a href="FormProgramas.php" class="small-box-footer">Acceder <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">

                        <p>Graduados</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <a href="FormEgresado.php" class="small-box-footer">Acceder <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">

                        <p>Encuesta</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-edit"></i>
                    </div>
                    <a href="FormEncuesta.php" class="small-box-footer">Acceder <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
            </div>
    </section>
    <?php include './footer.php'; ?>
    <?php
} else {
    header("location:../Admin");
}
?>
