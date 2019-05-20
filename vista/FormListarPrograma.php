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
                                    <th>Nombre Programa</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id='myTable'>
                                <tr>
                                    <td>115</td>
                                    <td>Ingenieria de Sistemas</td>
                                    <td><a href = './FormEditarPrograma.php?idPrograma=115&nomPrograma=Ingenieria de Sistemas' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-edit'></i></a></td> 
                                <tr>
                                    <td>111</td>
                                    <td>Ingenieria Civil</td>
                                    <td><a href = './FormEditarPrograma.php?idPrograma=111&nomPrograma=Ingenieria Civil' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-edit'></i></a></td> 
                               
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include_once './footer.php'; ?>

