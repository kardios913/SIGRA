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
                Formulario Graduados<br>
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

                        <p>Registrar Graduado</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <a href="FormRegistrarEgresado.php" class="small-box-footer">Acceder <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">

                        <p>Listar Graduado</p>
                    </div>
                    <div class="icon">
                        <i class="glyphicon glyphicon-list-alt"></i>
                    </div>
                    <a href="FormListarEgresado.php" class="small-box-footer">Acceder <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
            </div>
    </section>
    <?php include './footer.php'; ?>
    <?php
} else {
    header("location:../Admin");
}
?>
