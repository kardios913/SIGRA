<?php include './head.php'; ?>
<?php include './header.php'; ?>
<section class="content-header">
    <h1>
        <center>
            Agregar Pregunta<br>
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

                <!-- /.box-header -->
                <!-- form start 
                ['idEncuesta'] . "&fCierre=". $row['fechaCierre'] -->
                <form role="form" method="POST" enctype="multipart/form-data" action="../controlador/AgregarPregunta.php" id="FormArticulo">
                    <div class="box-body">
                        <input type='hidden' name='idEncuesta' class='form-control' value="<?php echo $_GET['idEncuesta'] ?>" placeholder="Nombre Encuesta" readonly>
                        <div class='form-group' name="formCantidad" id="formCantidad">
                        </div> 
                        <div class='form-group'>
                            <label>Pregunta</label>
                            <input type='text' name='nomEncuesta' class='form-control' value="" placeholder="Encabezado Pregunta" required>
                        </div> 
                        <div class='form-group'>
                            <label>Tipo Pregunta</label>
                            <select name="tipoPregunta" id="tipoPregunta" class="form-control"  onchange="Cargar()" required>
                                <option value="1"></option>
                                <option value="2">Abierta</option>
                                <option value="3">Selccion Multiple, Unica Respuesta</option>
                                <option value="4">Selccion Multiple, Multiple Respuesta</option>
                            </select>
                        </div>
                        <div class='form-group' name='cargarOpciones' id='cargarOpciones'>
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
<script>
<!-- /.content -->
<?php include './footer.php'; ?>