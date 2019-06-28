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
                    <form role="form" method="POST" action="../controlador/EditarInformacionLaboral.php" >
                        <div class="box-body">
                            <div class='form-group'>
                                <input type="text" name="idinfoLaboral" class="form-control" value=" <?php echo $_GET['idinfoLaboral'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Entidad</label>
                                <input type="text" class="form-control" name="entidad" placeholder="Entidad" value=" <?php echo $_GET['entidad'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Cargo</label>
                                <input type="text" class="form-control" name="cargo" placeholder="Cargo" value=" <?php echo $_GET['cargo'] ?>"  required>
                            </div>
                            <div class="form-group">
                                <label>Fecha de Inicio</label>
                                <input type="date" class="form-control" name="inicio" value=" <?php echo $_GET['fechaInicio'] ?>"  required>
                            </div>
                            <div class="form-group">
                                <label>Fecha Fin</label>
                                <input type="date" class="form-control" name="fin">
                            </div>
                            <div class="form-group">
                                <label>Pais</label>
                                <input type="text" class="form-control" name="pais" placeholder="Pais" value=" <?php echo $_GET['pais'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Ciudad</label>
                                <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" value=" <?php echo $_GET['ciudad'] ?>" required>
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


