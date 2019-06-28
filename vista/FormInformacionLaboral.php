<?php
session_start();
if (($_SESSION['documento']) != '') {
    $documetoGraduado = $_SESSION['documento'];
    ?>
    <?php include_once './head.php'; ?>
    <?php include_once './headerG.php'; ?>
    <section class="content-header">
        <h1>
            <center>
                Informacion Laboral<br>
                <small>Seleccion una Opción</small>
            </center>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8 col-md-offset-2">
                <!-- general form elements -->
                <div class="box box-danger">

                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" >
                        <div class="box-body">
                            <div class='form-group'>
                                <input id="myInput" type="text" placeholder="Search..">
                            </div> 
                        </div> 
                        <div class="table-responsive">
                            <?php include_once '../controlador/ListarInfoLaboral.php'; ?>
                        </div>
                        <div class="box-footer">
                            <a href="FormAgregarInformacionLaboral.php" class="btn btn-primary" type="submit">Agregar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include_once './footer.php'; ?>
    <?php
} else {
    header("location:../index.php");
}
?>


