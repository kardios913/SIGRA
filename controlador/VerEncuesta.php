<?php

include '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();
$idEncuestaxxx = $_GET['idEncuestaxxx'];

echo "<div class='box box-danger'>
                <form role='form' method='POST' enctype='multipart/form-data' action='' id='FormArticulo'>
                    <div class='box-body'>
                        <div class='form-group'>
                            <label>Id Encuesta</label>
                            <input type='text' name='idEncuesta' class='form-control' value='".$idEncuestaxxx."' placeholder='Nombre Encuesta' readonly>
                        </div> 
                        <div class='form-group'>
                         </div> 
                    </div>
                </form>
            </div>";