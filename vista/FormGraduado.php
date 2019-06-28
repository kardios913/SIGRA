<?php
session_start();

if (($_SESSION['documento']) != '') {
    ?>
    <!-- Content Header (Page header) -->
    <?php include './head.php'; ?>
    <?php include './headerG.php'; ?>                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <center>
                Graduado<br>
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

                        <p>Informacion Personal</p>
                    </div>
                    <div class="icon">
                        <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <a href="FormInformacionPersonal.php" class="small-box-footer">Acceder <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">

                        <p>Informacion Laboral</p>
                    </div>
                    <div class="icon">
                        <i class="glyphicon glyphicon-briefcase"></i>
                    </div>
                    <a href="FormInformacionLaboral.php" class="small-box-footer">Acceder <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">

                        <p>Informacion Academica</p>
                    </div>
                    <div class="icon">
                        <i class="glyphicon glyphicon-book"></i>
                    </div>
                    <a href="FormInformacionAcademica.php" class="small-box-footer">Acceder <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">

                        <p>Encuestas</p>
                    </div>
                    <div class="icon">
                        <i class="glyphicon glyphicon-ok"></i>
                    </div>
                    <a href="FormEncuestaGraduado.php" class="small-box-footer">Acceder <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
            </div>
    </section>
    <?php include './footer.php'; ?>
    <?php
} else {
    header("location:../index.php");
}
?>
