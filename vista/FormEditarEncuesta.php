<?php include './head.php'; ?>
<?php include './header.php'; ?>
<section class="content-header">
    <h1>
        <center>
            Actualizar Encuesta<br>
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
                <form role="form" method="POST" enctype="multipart/form-data" action="../controlador/EditarEncuesta.php" id="FormArticulo">
                    <div class="box-body">
                        <div class='form-group'>
                            <label>Id Encuesta</label>
                            <input type='text' name='idEncuesta' class='form-control' value="<?php echo $_GET['idEncuesta']?>" placeholder="Nombre Encuesta" readonly>
                        </div> 
                        <div class='form-group'>
                            <label>Nombre Encuesta</label>
                            <input type='text' name='nomEncuesta' class='form-control' value="<?php echo $_GET['nombre']?>" placeholder="Nombre Encuesta" required>
                        </div> 
                        <div class='form-group'>
                            <label>Fecha Cierre</label>
                            <input type='date' name='fCierreEncuesta' class='form-control' value="<?php echo $_GET['fCierre']?>" placeholder="Fecha Cierre" required>
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