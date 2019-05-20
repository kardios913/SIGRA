<?php include './head.php';?>
<?php include './header.php';?>
<section class="content-header">
    <h1>
        <center>
            Editar Programa Academico<br>
            <small>Formulario</small>
        </center>
    </h1>
    <br>
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
                        <div class='form-group'>
                            <label>Codigo Programa</label>
                            <input type='number' name='codPrograma' class='form-control' value="<?php echo $_GET['idPrograma'];?>" placeholder="Codigo Programa" readonly>
                        </div> 
                        <div class='form-group'>
                            <label>Nombre Programa</label>
                            <input type='text' name='NomPrograma' value="<?php echo $_GET['nomPrograma'];?>" class='form-control' placeholder="Nombre Programa"required>
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
<?php include './footer.php';?>