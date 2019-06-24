<?php
session_start();
if (($_SESSION['mail']) != '') {
    ?>
    <?php include './head.php'; ?>
    <?php include './header.php'; ?>
    <section class="content-header">
        <h1>
            <center>
                Registro Egresado<br>
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
                    <!-- form start -->
                    <form role="form" method="POST" enctype="multipart/form-data" action="../controlador/RegistrarEgresado.php" id="FormArticulo">
                        <div class="box-body">
                            <div class='form-group'>
                                <label>Codigo</label>
                                <input type='number' name='codEgresado' class='form-control' placeholder="Codigo Egresado" required>
                            </div> 
                            <div class='form-group'>
                                <label>Nombre</label>
                                <input type='text' name='nomEgresado' class='form-control' placeholder="Nombre Egresado" required>
                            </div> 
                            <div class='form-group'>
                                <label>Apellido</label>
                                <input type='text' name='apeEgresado' class='form-control' placeholder="Apellido Egresado"required>
                            </div> 
                            <div class='form-group'>
                                <label>Correo</label>
                                <input type='email' name='corEgresado' class='form-control' placeholder="Correo Egresado" required>
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
                                <input type='number' name='docEgresado' class='form-control' placeholder="Documento Egresado"required>
                            </div>
                            <div class='form-group'>
                                <label>Programa Academico</label>
                                <input type='number' name='proEgresado' class='form-control' placeholder="Programa Academico"required>
                            </div> 
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">

                            <button class="btn btn-primary" type="submit">Registrar</button>
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
    header("location:../Admin");
}
?>