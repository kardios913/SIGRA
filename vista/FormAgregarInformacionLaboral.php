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
                    <form role="form" method="POST" action="../controlador/AgregarInformacionLaboral.php" >
                        <div class="box-body">
                            <input type="hidden" name="documento" class="form-control" value=" <?php echo $documetoGraduado?>" readonly>
                            <div class="form-group">
                                <label>Entidad</label>
                                <input type="text" class="form-control" name="entidad" placeholder="Entidad"  required>
                            </div>
                            <div class="form-group">
                                <label>Cargo</label>
                                <input type="text" class="form-control" name="cargo" placeholder="Cargo"  required>
                            </div>
                            <div class="form-group">
                                <label>Fecha de Inicio</label>
                                <input type="date" class="form-control" name="inicio"  required>
                            </div>
                            <div class="form-group">
                                <label>Fecha Fin</label>
                                <input type="date" class="form-control" name="fin">
                            </div>
                            <div class="form-group">
                                <label>Pais</label>
                                <input type="text" class="form-control" name="pais" placeholder="Pais" required>
                            </div>
                            <div class="form-group">
                                <label>Ciudad</label>
                                <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" required>
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


