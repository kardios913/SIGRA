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
                Informacion Academica<br>
                <small>Complete los Campos</small>
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
                    <form role="form" method="POST" action="../controlador/AgregarInformacionAcademica.php" >
                        <div class="box-body">
                            <input type="hidden" name="documento" class="form-control" value=" <?php echo $documetoGraduado ?>" readonly>
                            <div class="form-group">
                                <label>Entidad</label>
                                <input type="text" class="form-control" name="entidad" placeholder="Entidad" required>
                            </div>
                            <div class="form-group">
                                <label>Titulacion</label>
                                <input type="text" class="form-control" name="titulacion" placeholder="Titulacion"   required>
                            </div>
                            <div class="form-group">
                                <label>Fecha de Titulacion</label>
                                <input type="date" class="form-control" name="fecha"  >
                            </div>
                            <div class="form-group">
                                <label>Semestre Actual</label>
                                <input type="text" class="form-control" name="semestre" placeholder="Semestre"  >
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
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



