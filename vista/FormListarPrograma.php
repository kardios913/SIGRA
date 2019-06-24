<?php
session_start();
if (($_SESSION['mail']) != '') {
    ?>
    <?php include_once './head.php'; ?>
    <?php include_once './header.php'; ?>
    <section class="content-header">
        <h1>
            <center>
                Programas Academicos<br>
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
                    <form role="form" method="POST" >
                        <div class="box-body">
                            <div class='form-group'>
                                <input id="myInput" type="text" placeholder="Search..">
                            </div> 
                        </div> 
                        <div class="table-responsive">
                            <?php include_once '../controlador/ListarPrograma.php'; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include_once './footer.php'; ?>
    <?php
} else {
    header("location:../Admin");
}
?>
