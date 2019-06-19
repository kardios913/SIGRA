<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of negSiEgre
 *
 * @author KRLOS
 */
include_once '../dao/AdminDAO.php';
include_once '../dao/EgresadoDAO.php';
include_once '../dao/EncuestaDAO.php';
include_once '../dao/InfoEstudioDAO.php';
include_once '../dao/InfoLaboralDAO.php';
include_once '../dao/OpcionesPreguntasDAO.php';
include_once '../dao/PreguntasDAO.php';
include_once '../dao/ProgramaDAO.php';
include_once '../dao/RespuestasDAO.php';

include_once '../dto/AdminDTO.php';
include_once '../dto/EgresadoDTO.php';
include_once '../dto/EncuestaDTO.php';
include_once '../dto/InfoEstudioDTO.php';
include_once '../dto/InfoLaboralDTO.php';
include_once '../dto/OpcionesPreguntasDTO.php';
include_once '../dto/PreguntasDTO.php';
include_once '../dto/ProgramaDTO.php';
include_once '../dto/RespuestasDTO.php';

class negSiEgre {

    //put your code here

    public function datetimeCompleto() {
        date_default_timezone_set("America/Bogota");
        $date = date("Y-m-d H:i:s");
        return $date;
    }

    public function datetime() {
        date_default_timezone_set("America/Bogota");
        $date = date("Y-m-d");
        return $date;
    }

    public function date() {
        date_default_timezone_set("America/Bogota");
        $date = date("Y-m");
        return $date;
    }

    public function LoginAdmin($mail, $pass) {
        $modto = new AdminDTO();
        $modto->setContrasena($pass);
        $modto->setEmail($mail);
        $modao = new AdminDAO();
        $result = $modao->LoginAdmin($modto);
        return $result;
    }

    public function RegistrarPrograma($codPrograma, $nomPrograma) {
        $modto = new ProgramaDTO();
        $modto->setCodPrograma($codPrograma);
        $modto->setNomPrograma($nomPrograma);
        $modao = new ProgramaDAO();
        $result = $modao->RegistrarPrograma($modto);
        return $result;
    }

    /* TABLA PROGRAMA */

    public function ListarPrograma() {
        $modao = new ProgramaDAO();
        $listado = $modao->ListarPrograma();
        $result = " <table id='mytable' class='table table-bordred table-striped table-responsive'>
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre Programa</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id='myTable'>";
        if ($row = $modao->getArray($listado)) {
            do {
                $result .= "               <tr>
                                    <td>" . $row['idPrograma'] . "</td>
                                    <td>" . $row['nomPrograma'] . "</td>
                                    <td><a href = './FormEditarPrograma.php?idPrograma=" . $row['idPrograma'] . "&nomPrograma=" . $row['nomPrograma'] . "' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-edit'></i></a></td>";
            } while ($row = $modao->getArray($listado));
            $result .= "          </tbody>
                        </table>";
            return $result;
        } else {
            $result .= "No Hay Programas Academicos Registrados";
            return $result;
        }
    }

    public function EditarPrograma($codPrograma, $nomPrograma) {
        $modto = new ProgramaDTO();
        $modto->setCodPrograma($codPrograma);
        $modto->setNomPrograma($nomPrograma);
        $modao = new ProgramaDAO();
        $resul = $modao->EditarPrograma($modto);
        return $resul;
    }

    /* TABLA EGRESADO */

    public function RegistrarEgresado($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado) {
        $modto = new EgresadoDTO();
        $modto->setCodEgresado($codEgresado);
        $modto->setNombre($nomEgresado);
        $modto->setApellido($apeEgresado);
        $modto->setCorreo($corEgresado);
        $modto->setTDocumento($tipoEgresado);
        $modto->setNDocumento($docEgresado);
        $modto->setCodPrograma($proEgresado);
        $modao = new EgresadoDAO();
        $result = $modao->RegistrarEgresado($modto);
        return $result;
    }

    public function EditarEgresado($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado) {
        $modto = new EgresadoDTO();
        $modto->setCodEgresado($codEgresado);
        $modto->setNombre($nomEgresado);
        $modto->setApellido($apeEgresado);
        $modto->setCorreo($corEgresado);
        $modto->setTDocumento($tipoEgresado);
        $modto->setNDocumento($docEgresado);
        $modto->setCodPrograma($proEgresado);
        $modao = new EgresadoDAO();
        $result = $modao->EditarEgresado($modto);
        return $result;
    }

    public function ListarEgresado() {
        $modao = new EgresadoDAO();
        $listado = $modao->ListarEgresado();
        $result = "<table id='mytable' class='table table-bordred table-striped table-responsive'>
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Correo</th>
                                    <th>Documento</th>
                                    <th>Programa</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id='myTable'>";
        //'contrasena'   'tipodocumeto'   'idPrograma'
        if ($row = $modao->getArray($listado)) {
            do {
                $result .= "    <tr>
                                    <td>" . $row['idEgresado'] . "</td>
                                    <td>" . $row['nombre'] . "</td>
                                    <td>" . $row['apellido'] . "</td>
                                    <td>" . $row['correo'] . "</td>
                                    <td>" . $row['numDocumento'] . "</td>
                                    <td>" . $row['idPrograma'] . "</td>
                                    <td><a href = './FormEditarEgresado.php?codEgresado=" . $row['idEgresado'] . "&nomEgresado=" . $row['nombre'] . "
                                        &apeEgresado=" . $row['apellido'] . "&docEgresado=" . $row['numDocumento'] . "&correo=" . $row['correo'] . "
                                            &idPrograma=" . $row['idPrograma'] . "' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-edit'></i></a></td> 
                                    <td><a href = './FormVerEgresado.php?codEgresado=" . $row['idEgresado'] . "' class = 'btn btn-warning' ><i class = 'glyphicon glyphicon-eye-open'></i></a></td> ";
            } while ($row = $modao->getArray($listado));
            $result .= "          </tbody>
                        </table>";
            return $result;
        } else {
            $result .= "No Hay Egresados Registrados";
            return $result;
        }
    }

    public function ListarVerEgresado($codEgresado) {
        $modao = new EgresadoDAO();
        $listado = $modao->ListarVerEgresado($codEgresado);
        $result = "<div class='box-body'>";
        if ($row = $modao->getArray($listado)) {
            $result .= "                         
                        <div class='col-lg-6 col-xs-'>
                            <div class='form-group'>
                                <label>Codigo: </label>
                                <span>" . $row['idEgresado'] . "</span> 
                            </div> 
                            <div class='form-group'>
                                <label>Nombre:</label>
                                <span>" . $row['nombre'] . "</span> 
                            </div> 
                            <div class='form-group'>
                                <label>Apellido:</label>
                                <span>" . $row['apellido'] . "</span>
                            </div> 
                            <div class='form-group'>
                                <label>Correo:</label>
                                <span>" . $row['correo'] . "</span>
                            </div> 
                            <div class='form-group'>
                                <label>Documento: </label>
                                <span>" . $row['numDocumento'] . "</span>
                            </div> 
                            <div class='form-group'>
                                <label>Telefono:</label>
                                <span>" . $row['telefono'] . "</span>
                            </div> 
                        </div>
                        <div class='col-lg-6 col-xs-6'>
                            
                            <div class='form-group'>
                                <label>Celular:</label>
                                <span>" . $row['celular'] . "</span>
                            </div> 
                            <div class='form-group'>
                                <label>Dirección:</label>
                                <span>" . $row['dirResidencia'] . "</span>
                            </div> 
                            <div class='form-group'>
                                <label>Departamento:</label>
                                <span>" . $row['depResidencia'] . "</span>
                            </div> 
                            <div class='form-group'>
                                <label>Ciudad: </label>
                                <span>" . $row['ciudResidencia'] . "</span>
                            </div> 
                            <div class='form-group'>
                                <label>Pais: </label>
                                <span>" . $row['paisResidencia'] . "</span>
                            </div> 
                            <div class='form-group'>
                                <label>Barrio: </label>
                                <span>" . $row['barrioResidencia'] . "</span>
                            </div> 
                        </div>  ";
            $result .= "</div>";
            return $result;
        } else {
            $result .= "No hay Informacion </div>";
            return $result;
        }
    }

    /* TABLA ENCUESTAS */

    public function CrearEncuesta($nomEncuesta, $fCierreEncuesta, $fCreacionEncuesta) {
        $modto = new EncuestaDTO();
        $modto->setNombre($nomEncuesta);
        $modto->setFechaFin($fCierreEncuesta);
        $modto->setFechaCreacio($fCreacionEncuesta);
        $modao = new EncuestaDAO();
        $result = $modao->CrearEncuesta($modto);
        return $result;
    }

    public function ListarEncuesta() {
        $modao = new EncuestaDAO;
        $listado = $modao->ListarEncuesta();
        $result = "<table id='mytable' class='table table-bordred table-striped table-responsive'>
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nombre</th>
                                    <th>Creacion</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id='myTable'>";
        if ($row = $modao->getArray($listado)) {
            do {
                $result .= "    <tr>
                                    <td>" . $row['idEncuesta'] . "</td>
                                    <td>" . $row['nombre'] . "</td>
                                    <td>" . $row['fechaCreacion'] . "</td>";
                if ($this->isEmptyRespuesta((int) $row['idEncuesta'])) {
                    $result .= "<td><a href = './FormShowResult.php?idEncuesta=" . $row['idEncuesta'] . "' class = 'btn btn-success' ><i class = 'fa fa-bar-chart'></i></a></td> "
                            . "<td><a href = './FormVerEncuesta.php?idEncuesta=" . $row['idEncuesta'] . "' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-eye-open'></i></a></td>";
                } else {
                    $result .= "<td><a href = './FormAddPregunta.php?idEncuesta=" . $row['idEncuesta'] . "' class = 'btn btn-success' ><i class = 'glyphicon glyphicon-plus'></i></a></td> "
                            . "<td><a href = './FormEditarEncuesta.php?idEncuesta=" . $row['idEncuesta'] . "&nombre=" . $row['nombre'] . "' class = 'btn btn-warning' ><i class = 'glyphicon glyphicon-edit'></i></a></td>"
                            . "<td><a href = './FormVerEncuesta.php?idEncuestaxxx=" . $row['idEncuesta'] . "' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-eye-open'></i></a></td>"
                            . "<td><a href = '../controlador/EliminarEncuesta.php?idEncuesta=" . $row['idEncuesta'] . "' class = 'btn btn-danger' ><i class = 'glyphicon glyphicon-trash'></i></a></td>";
                }
            } while ($row = $modao->getArray($listado));
            $result .= "          </tbody>
                        </table>";
            return $result;
        } else {
            $result .= "<td>No Hay </td><td>Encuestas Registradas</td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                            </tbody>
                        </table>
                        <div class='box-footer'>
                        <a href='../vista/FormCrearEncuesta.php' class='btn btn-primary' type='submit'>Crear</a>
                    </div>";
            return $result;
        }
    }

    public function EditarEncuesta($idEncuesta, $nomEncuesta, $fCierreEncuesta) {
        $modto = new EncuestaDTO();
        $modto->setIdEncuesta($idEncuesta);
        $modto->setNombre($nomEncuesta);
        $modto->setFechaFin($fCierreEncuesta);
        $modao = new EncuestaDAO();
        $result = $modao->EditarEncuesta($modto);
        return $result;
    }

    public function EliminarEncuesta($idEncuesta) {
        $modto = new EncuestaDTO();
        $modto->setIdEncuesta($idEncuesta);
        $modao = new EncuestaDAO();
        $result = $modao->EliminarEncuesta($modto);
        return $result;
    }

    /* TABLA RESPUESTA */

    public function isEmptyRespuesta($idEncuesta) {
        $modto = new RespuestasDTO();
        $modto->setIdEncuesta($idEncuesta);
        $modao = new RespuestasDAO();
        $result = $modao->isEmptyRespuesta($modto);
        return $result;
    }

    public function GuardarOpciones($idEncuesta, $nomEncuesta, $tipoPregunta, $array) {
        $res;
        $modto = new PreguntasDTO();
        $opcdto = new OpcionesPreguntasDTO();
        $modto->setIdEncuesta($idEncuesta);
        $modto->setEnunciado($nomEncuesta);
        $modto->setTipoPregunta($tipoPregunta);
        $modao = new PreguntasDAO();
        $opcdao = new OpcionesPreguntasDAO();
        $result = $modao->InsertarPregunta($modto);
        if ($result) {
            $getId = $modao->getIdPregunta($modto);
            if ($row = $modao->getArray($getId)) {
                do {
                    $idPregunta = $row['idPregunta'];
                    $count = count($array);
                    for ($i = 0; $i < $count; $i++) {
                        $opcdto->setIdEncuesta($idEncuesta);
                        $opcdto->setIdPregunta($idPregunta);
                        $opcdto->setOpcion($array[$i]);
                       $res = $opcdao->InsertarOpciones($opcdto);
                    }
                } while ($row = $modao->getArray($getId));
            }
        }
        return $res;
    }

}
