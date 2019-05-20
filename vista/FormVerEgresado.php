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
                <form role="form" method="POST" enctype="multipart/form-data" action="../controlador/CrearArticulo.php" id="FormArticulo">
                    <div class="box-body">
                        <div class="col-lg-6 col-xs-6">
                            <div class='form-group'>
                                <label>Codigo: </label>
                                <span><?php echo $_GET['codEgresado']; ?></span> 
                            </div> 
                            <div class='form-group'>
                                <label>Nombre:</label>
                                <span></span> 
                            </div> 
                            <div class='form-group'>
                                <label>Apellido:</label>
                                <span></span>
                            </div> 
                            <div class='form-group'>
                                <label>Correo:</label>
                                <span></span>
                            </div> 
                            <div class='form-group'>
                                <label>Documento: </label>
                                <span></span>
                            </div> 
                            <div class='form-group'>
                                <label>Telefono:</label>
                                <span></span>
                            </div> 
                        </div>
                        <div class="col-lg-6 col-xs-6">
                            
                            <div class='form-group'>
                                <label>Celular:</label>
                                <span></span>
                            </div> 
                            <div class='form-group'>
                                <label>Dirección:</label>
                                <span></span>
                            </div> 
                            <div class='form-group'>
                                <label>Departamento:</label>
                                <span></span>
                            </div> 
                            <div class='form-group'>
                                <label>Ciudad: </label>
                                <span></span>
                            </div> 
                            <div class='form-group'>
                                <label>Pais: </label>
                                <span></span>
                            </div> 
                            <div class='form-group'>
                                <label>Barrio: </label>
                                <span></span>
                            </div> 
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">

                        <a class="btn btn-primary" href="FormListarEgresado.php" >Atras</a>
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