<?php
session_start();
if (($_SESSION['documento']) != '') {
    ?>
    <?php include './head.php'; ?>
    <?php include './headerG.php'; ?>
    <section class="content-header">
        <h1>
            <center>
                Editar Informacion Personal<br>
                <small>Formulario</small>
            </center>
        </h1>
        <?php if (isset($msg)) { ?>
            <div class="col-md-12">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong></strong> <?php echo $msg; ?>
                </div>
            </div>
            <?php
        }
        unset($msg);
        ?>
    </section>
    <section class="content-header">
        <div id="result">

        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8 col-md-offset-2"> 
                <!-- general form elements -->
                <div class="box box-danger">

                    <form role="form" method="POST" enctype="multipart/form-data" action="../controlador/ActualizarInformacionPersonal.php" id="FormArticulo">
                        <div class="box-body">
                            <div class='form-group'>
                                <label>Codigo</label>
                                <input type='number' name='codEgresado' class='form-control' value="<?php echo $_GET['codEgresado']; ?>" placeholder="Codigo Egresado" readonly>
                            </div> 
                            <div class='form-group'>
                                <label>Nombre</label>
                                <input type='text' name='nomEgresado' class='form-control' value="<?php echo $_GET['nomEgresado']; ?>" placeholder="Nombre Egresado" required>
                            </div> 
                            <div class='form-group'>
                                <label>Apellido</label>
                                <input type='text' name='apeEgresado' class='form-control' value="<?php echo $_GET['apeEgresado']; ?>" placeholder="Apellido Egresado"required>
                            </div> 
                            <div class='form-group'>
                                <label>Tipo Documento</label>
                                <select name="tipoDocumento" class="form-control" required>
                                    <option value="CC">CC</option>
                                    <option value="TI">TI</option>
                                    <option value="EXT">EXT</option>
                                </select>
                            </div> 
                            <div class='form-group'>
                                <label>Documento</label>
                                <input type='number' name='docEgresado' class='form-control' value="<?php echo $_GET['docEgresado']; ?>" placeholder="Documento Egresado"required>
                            </div>
                            <div class='form-group'>
                                <label>Correo</label>
                                <input type='email' name='corEgresado' class='form-control' value="<?php echo $_GET['correo']; ?>" placeholder="Correo Egresado" required>
                            </div> 
                            <div class='form-group'>
                                <label>Programa Academico</label>
                                <input type='number' name='proEgresado' class='form-control' value="<?php echo $_GET['idPrograma']; ?>" placeholder="Programa Academico"required>
                            </div> 
                            <div class='form-group'>
                                <label>Telefono</label>
                                <input type='number' name='telEgresado' class='form-control' value="<?php echo $_GET['telEgresado']; ?>" placeholder="Telefono"required>
                            </div> 
                            <div class='form-group'>
                                <label>Celular</label>
                                <input type='number' name='celEgresado' class='form-control' value="<?php echo $_GET['celEgresado']; ?>" placeholder="Celular"required>
                            </div> 
                            <div class='form-group'>
                                <label>Direccion</label>
                                <input type='text' name='dirEgresado' class='form-control' value="<?php echo $_GET['dirEgresado']; ?>" placeholder="Direccion"required>
                            </div> 
                            <div class='form-group'>
                                <label>Barrio</label>
                                <input type='text' name='barrioEgresado' class='form-control' value="<?php echo $_GET['barrioEgresado']; ?>" placeholder="Barrio"required>
                            </div> 
                            <div class='form-group'>
                                <label>Ciudad Residencia</label>
                                <input type='text' name='ciudadEgresado' class='form-control' value="<?php echo $_GET['ciudadEgresado']; ?>" placeholder="Ciudad Residencia"required>
                            </div> 
                            <div class='form-group'>
                                <label>Departamento Residencia</label>
                                <input type='text' name='deparEgresado' class='form-control' value="<?php echo $_GET['depEgresado']; ?>" placeholder="Departamento Residencia"required>
                            </div> 
                            <div class='form-group'>
                                <label>pais Residencia</label>
                                <input type='text' name='paisEgresado' class='form-control' value="<?php echo $_GET['paisEgresado']; ?>" placeholder="Pais Residencia"required>
                            </div> 
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">

                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->

        </div>
    </section>
    <!-- /.content -->
    <?php include './footer.php'; ?>
    <?php
} else {
    header("location:../index.php");
}
?>