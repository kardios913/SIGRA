<?php include_once './head.php'; ?>
<?php include_once './header.php'; ?>
<section class="content-header">
    <h1>
        <center>
            Egresados<br>
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
                <form role="form" method="POST">
                    <div class="box-body">
                        <div class='form-group'>
                            <input id="myInput" type="text" placeholder="Search..">
                        </div> 
                    </div> 
                    <div class="table-responsive">
                        <table id='mytable' class='table table-bordred table-striped table-responsive'>
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Documento</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id='myTable'>
                                <tr>
                                    <td>1151000</td>
                                    <td>Carlos Eduardo</td>
                                    <td>Barrera Silva</td>
                                    <td>109029903</td>
                                    <td><a href = './FormEditarEgresado.php?codEgresado=1151000&nomEgresado=Carlos Eduardo&apeEgresado=Barrera Silva
                                           &docEgresado=109029903' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-edit'></i></a></td> 
                                    <td><a href = './FormVerEgresado.php?codEgresado=1151000' class = 'btn btn-warning' ><i class = 'glyphicon glyphicon-eye-open'></i></a></td> 
                               
                                <tr>
                                    <td>1151232</td>
                                    <td>Josue David</td>
                                    <td>Ardila Parra</td>
                                    <td>109029903</td>
                                    <td><a href = './FormEditarEgresado.php?codEgresado=1151232&nomEgresado=Josue David&apeEgresado=Ardila Parra
                                           &docEgresado=109029903' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-edit'></i></a></td> 
                                    <td><a href = './FormVerEgresado.php?codEgresado=1151232' class = 'btn btn-warning' ><i class = 'glyphicon glyphicon-eye-open'></i></a></td> 
                               
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include_once './footer.php'; ?>


