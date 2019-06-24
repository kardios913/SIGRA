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
                    <form role="form" method="POST" enctype="multipart/form-data" action="../controlador/ListarVerEgresado.php" id="FormArticulo">
                        <?php $codVerEgresado = $_GET['codEgresado']; ?>
                        <?php include_once '../controlador/ListarVerEgresado.php'; ?>
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
    <?php
} else {
    header("location:../Admin");
}
?>