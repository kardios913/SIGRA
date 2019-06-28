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

    public function CrearEncuesta($nomEncuesta,  $fCreacionEncuesta) {
        $modto = new EncuestaDTO();
        $modto->setNombre($nomEncuesta);
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
            $result .= "<td></td><td>No Hay Encuestas Registradas</td>
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

    public function EditarEncuesta($idEncuesta, $nomEncuesta) {
        $modto = new EncuestaDTO();
        $modto->setIdEncuesta($idEncuesta);
        $modto->setNombre($nomEncuesta);
        $modao = new EncuestaDAO();
        $result = $modao->EditarEncuesta($modto);
        return $result;
    }

    public function EliminarEncuesta($idEncuesta) {
        $modto = new EncuestaDTO();
        $modto->setIdEncuesta($idEncuesta);
        $modao = new EncuestaDAO();
        $opcdao = new OpcionesPreguntasDAO();
        $result = false;
        if($opcdao->EliminarOpciones($idEncuesta)){
            $predao = new PreguntasDAO();
            if($predao->EliminarPregunta($idEncuesta)){
                $result = $modao->EliminarEncuesta($modto);
            }
        }
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

    public function verEncuesta($idEncuestaxxx) {
        $modao = new PreguntasDAO();
        $opcDAO = new OpcionesPreguntasDAO();
        $listado = $modao->ListarPreguntaIdEncuesta($idEncuestaxxx);
        $result = "<div class='box box-danger'>
                <form role='form' method='POST' enctype='multipart/form-data' action='' id='FormArticulo'>
                    <div class='box-body'>";
        if ($row = $modao->getArray($listado)) {
            $contador = 1;
            do {
                $result .= "<div class='form-group'>"
                        . "<h4>" . $contador . ". " . $row['pregunta'] . "</h4>"
                        . "</div>";
                if ($row['tipoPregunta'] == 2) {
                    $result .= "<div style='padding-left:15px' class='form-group'>"
                            . "<input type='text' id='opcion" . $contador . "' name='opcion" . $contador . "' placeholder='Respuesta " . $contador . "' class='form-control'>"
                            . "</div>";
                } else {
                    $opc = $opcDAO->PintarEncuesta($idEncuestaxxx, $row['idPregunta']);
                    if ($row2 = $opcDAO->getArray($opc)) {
                        do {
                            if ($row['tipoPregunta'] == 3) {
                                $result .= "<div style='padding-left:15px' class='form-check'>"
                                        . "<label><input type='radio' id='opcion" . $contador . "' name='opcion" . $contador . "' class='form-radio-input' id=''> "
                                        . $row2['opcion']
                                        . "</label>"
                                        . "</div>";
                            }
                            if ($row['tipoPregunta'] == 4) {
                                $result .= "<div style='padding-left:15px' class='form-check'>"
                                        . "<label><input type='checkbox' id='opcion" . $contador . "' name='opcion" . $contador . "' class='form-check-input' id=''> "
                                        . $row2['opcion']
                                        . "</label>"
                                        . "</div>";
                            }
                        } while ($row2 = $opcDAO->getArray($opc));
                    } else {
                        $result .= "No Hay opciones Pregunta";
                    }
                }
                $contador++;
            } while ($row = $modao->getArray($listado));
            $result .= "</div>"
                    . "</form>"
                    . "</div>";
            return $result;
        } else {
            $result .= "<div class='form-group'>"
                    . "<h4>NO HAY PREGUNTAS REGISTRADAS</h4>"
                    . "</div>"
                    . "</div>"
                    . "</form>"
                    . "</div>";
            return $result;
        }
    }

    /**
     * MODULO GRADUADO
     */
    public function LoginGraduado($documento, $pass) {
        $modto = new EgresadoDTO;
        $modto->setContrasena($pass);
        $modto->setNDocumento($documento);
        $modao = new EgresadoDAO();
        $result = $modao->LoginGraduado($modto);
        return $result;
    }

    public function informacionPersonal($documento) {
        $modao = new EgresadoDAO();
        $listado = $modao->InformacionPersonal($documento);
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
                                <label>Barrio: </label>
                                <span>" . $row['barrioResidencia'] . "</span>
                            </div> 
                            <div class='form-group'>
                                <label>Ciudad: </label>
                                <span>" . $row['ciudResidencia'] . "</span>
                            </div> 
                            <div class='form-group'>
                                <label>Departamento:</label>
                                <span>" . $row['depResidencia'] . "</span>
                            </div> 
                            <div class='form-group'>
                                <label>Pais: </label>
                                <span>" . $row['paisResidencia'] . "</span>
                            </div> 
                        </div>  ";
            $result .= "</div>";
            $result .= "<div class='box-footer'>"
                    . "<div class='col-lg-6 col-xs-6'><a class='btn btn-primary'  href='FormGraduado.php' >Atras</a> </div>"
                    . "<div class='col-lg-6 col-xs-6' align='right' ><a class='btn btn-success'  href='FormEditarInformacionPersonal.php?codEgresado=" . $row['idEgresado'] . "&nomEgresado=" . $row['nombre'] . "&apeEgresado=" . $row['apellido'] . "&docEgresado=" . $row['numDocumento'] . "&correo=" . $row['correo'] . "&idPrograma=" . $row['idPrograma'] . "&telEgresado=" . $row['telefono'] . "&celEgresado=" . $row['celular'] . "&dirEgresado=" . $row['dirResidencia'] . "&barrioEgresado=" . $row['barrioResidencia'] . "&ciudadEgresado=" . $row['ciudResidencia'] . "&depEgresado=" . $row['depResidencia'] . "&paisEgresado=" . $row['paisResidencia'] . "' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-edit'></i> Editar</a></div>"
                    . "</div>";
            return $result;
        } else {
            $result .= "No hay Informacion </div>";
            return $result;
        }
    }

    public function ActualizarInfo($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado, $tel, $cel, $direccion, $barrio, $ciudad, $depar, $pais) {
        $modto = new EgresadoDTO();
        $modto->setCodEgresado($codEgresado);
        $modto->setNombre($nomEgresado);
        $modto->setApellido($apeEgresado);
        $modto->setCorreo($corEgresado);
        $modto->setTDocumento($tipoEgresado);
        $modto->setNDocumento($docEgresado);
        $modto->setCodPrograma($proEgresado);
        $modto->setTelefono($tel);
        $modto->setCelular($cel);
        $modto->setDirResidencia($direccion);
        $modto->setBarriResidencia($barrio);
        $modto->setCiuResidencia($ciudad);
        $modto->setDepResidencia($depar);
        $modto->setPaisResidencia($pais);
        $modao = new EgresadoDAO();
        $result = $modao->ActualizarInfo($modto);
        return $result;
    }

    public function ListarInfoLaboral($documento) {
        $modao = new InfoLaboralDAO();
        $listado = $modao->ListarInformacionLaboral($documento);
        $result = "<table id='mytable' class='table table-bordred table-striped table-responsive'>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Entidad</th>
                                    <th>Cargo</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Fin</th>
                                    <th>Ciudad</th>
                                    <th>Pais</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id='myTable'>";
        //'contrasena'   'tipodocumeto'   'idPrograma'
        if ($row = $modao->getArray($listado)) {
            do {
                $result .= "    <tr>
                                    <td>" . $row['idinfoLaboral'] . "</td>
                                    <td>" . $row['entidad'] . "</td>
                                    <td>" . $row['cargo'] . "</td>
                                    <td>" . $row['fechaInicio'] . "</td>
                                    <td>" . $row['fechaFin'] . "</td>
                                    <td>" . $row['ciudad'] . "</td>
                                    <td>" . $row['pais'] . "</td>
                                    <td><a href = './FormEditarInfoLaboral.php?idinfoLaboral=" . $row['idinfoLaboral'] . "&entidad=" . $row['entidad'] . "&cargo=" . $row['cargo'] . "&fechaInicio=" . $row['fechaInicio'] . "&fechaFin=" . $row['fechaFin'] . "&ciudad=" . $row['ciudad'] . "&pais=" . $row['pais'] . "' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-edit'></i></a></td> 
                                    <td><a href = '../controlador/ELiminarInfoLaboral.php?id=" . $row['idinfoLaboral'] . "' class = 'btn btn-danger' ><i class = 'glyphicon glyphicon-trash'></i></a></td> ";
            } while ($row = $modao->getArray($listado));
        } else {
            $result .= "<th></th>"
                    . "<th></th>"
                    . "<th></th>"
                    . "<th>No Hay Informacion Para Mostrar</th>"
                    . "<th></th>"
                    . "<th></th>"
                    . "<th></th>"
                    . "<th></th>"
                    . "<th></th>";
        }
        $result .= "          </tbody>
                        </table>";

        return $result;
    }

    public function AgregarInformacionLaboral($documento, $Entidad, $Cargo, $Inicio, $Fin, $Ciudad, $Pais) {
        $moddto = new InfoLaboralDTO();
        $moddto->setCodEgresado($documento);
        $moddto->setEntidad($Entidad);
        $moddto->setCargo($Cargo);
        $moddto->setFechaInicio($Inicio);
        $moddto->setFechaFin($Fin);
        $moddto->setCiudad($Ciudad);
        $moddto->setPais($Pais);
        $moddao = new InfoLaboralDAO();
        $result = $moddao->RegistrarInformacionLaboral($moddto);
        return $result;
    }

    public function EditarInformacionLaboral($id, $Entidad, $Cargo, $Inicio, $Fin, $Ciudad, $Pais) {
        $moddto = new InfoLaboralDTO();
        $moddto->setCodigoLaboral($id);
        $moddto->setEntidad($Entidad);
        $moddto->setCargo($Cargo);
        $moddto->setFechaInicio($Inicio);
        $moddto->setFechaFin($Fin);
        $moddto->setCiudad($Ciudad);
        $moddto->setPais($Pais);
        $moddao = new InfoLaboralDAO();
        $result = $moddao->ActualizarInformacionLaboral($moddto);
        return $result;
    }

    public function EliminarInformacionLaboral($id) {
        $modao = new InfoLaboralDAO();
        $result = $modao->EliminarInformacionLaboral($id);
        return $result;
    }

    //`idinfoEstudio`, `titulo`, `entidad`, `fechaTitulacion`, `semestre` 
    public function ListarInfoAcademica($documento) {
        $modao = new InfoEstudioDAO();
        $listado = $modao->ListarInformacionAcademica($documento);
        $result = "<table id='mytable' class='table table-bordred table-striped table-responsive'>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Entidad</th>
                                    <th>Fecha Titulacion</th>
                                    <th>Semestre</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id='myTable'>";
        //'contrasena'   'tipodocumeto'   'idPrograma'
        if ($row = $modao->getArray($listado)) {
            do {
                $result .= "    <tr>
                                    <td>" . $row['idinfoEstudio'] . "</td>
                                    <td>" . $row['titulo'] . "</td>
                                    <td>" . $row['entidad'] . "</td>
                                    <td>" . $row['fechaTitulacion'] . "</td>
                                    <td>" . $row['semestre'] . "</td>
                                    <td><a href = './FormEditarInfoAcademica.php?idinfoEstudio=" . $row['idinfoEstudio'] . "&titulo=" . $row['titulo'] . "&entidad=" . $row['entidad'] . "&fechaTitulacion=" . $row['fechaTitulacion'] . "&semestre=" . $row['semestre'] . "' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-edit'></i></a></td> 
                                    <td><a href = '../controlador/ELiminarInfoAcademica.php?id=" . $row['idinfoEstudio'] . "' class = 'btn btn-danger' ><i class = 'glyphicon glyphicon-trash'></i></a></td> ";
            } while ($row = $modao->getArray($listado));
        } else {
            $result .= "<th></th>"
                    . "<th></th>"
                    . "<th></th>"
                    . "<th>No Hay Informacion Para Mostrar</th>"
                    . "<th></th>"
                    . "<th></th>"
                    . "<th></th>";
        }
        $result .= "          </tbody>
                        </table>";

        return $result;
    }

    public function AgregarInformacionAcademica($documento, $Entidad, $Titulo, $Fecha, $Semestre) {
        $moddto = new InfoEstudioDTO();
        $moddto->setCodEgresado($documento);
        $moddto->setEntidad($Entidad);
        $moddto->setTitulo($Titulo);
        $moddto->setFechaTitulacion($Fecha);
        $moddto->setSemestre($Semestre);
        $moddao = new InfoEstudioDAO();
        $result = $moddao->RegistrarInformacionAcademica($moddto);
        return $result;
    }

    public function EditarInformacionAcademica($id, $Entidad, $Titulo, $Fecha, $Semestre) {
        $moddto = new InfoEstudioDTO();
        $moddto->setCodEstudio($id);
        $moddto->setEntidad($Entidad);
        $moddto->setTitulo($Titulo);
        $moddto->setFechaTitulacion($Fecha);
        $moddto->setSemestre($Semestre);
        $moddao = new InfoEstudioDAO();
        $result = $moddao->ActualizarInformacionAcademica($moddto);
        return $result;
    }

    public function EliminarInformacionAcademica($id) {
        $modao = new InfoEstudioDAO();
        $result = $modao->EliminarInformacionAcademica($id);
        return $result;
    }

    public function ListarEncuestaGraduado() {
        $modao = new EncuestaDAO;
        $listado = $modao->ListarEncuesta();
        $result = "<table id='mytable' class='table table-bordred table-striped table-responsive'>
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nombre</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id='myTable'>";
        if ($row = $modao->getArray($listado)) {
            do {
                $result .= "    <tr>
                                    <td>" . $row['idEncuesta'] . "</td>
                                    <td>" . $row['nombre'] . "</td>";

                $result .= "<td><a href = './FormVerEncuestaGraduado.php?idEncuestaxxx=" . $row['idEncuesta'] . "' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-eye-open'></i></a></td>";
            } while ($row = $modao->getArray($listado));
            $result .= "          </tbody>
                        </table>";
            return $result;
        } else {
            $result .= "<td></td>
                <td>No Hay Encuestas Registradas</td>
                           <td></td>
                            </tbody>
                        </table>";
            return $result;
        }
    }

    public function verEncuestaGraduado($idEncuestaxxx) {
        $modao = new PreguntasDAO();
        $opcDAO = new OpcionesPreguntasDAO();
        $listado = $modao->ListarPreguntaIdEncuesta($idEncuestaxxx);
        $result = "<div class='box box-danger'>
                <form role='form' method='POST' enctype='multipart/form-data' action='' id='FormArticulo'>
                    <div class='box-body'>";
        if ($row = $modao->getArray($listado)) {
            $contador = 1;
            do {
                $result .= "<div class='form-group'>"
                        . "<h4>" . $contador . ". " . $row['pregunta'] . "</h4>"
                        . "</div>";
                if ($row['tipoPregunta'] == 2) {
                    $result .= "<div style='padding-left:15px' class='form-group'>"
                            . "<input type='text' id='opcion" . $contador . "' name='opcion" . $contador . "' placeholder='Respuesta " . $contador . "' class='form-control'>"
                            . "</div>";
                } else {
                    $opc = $opcDAO->PintarEncuesta($idEncuestaxxx, $row['idPregunta']);
                    if ($row2 = $opcDAO->getArray($opc)) {
                        do {
                            if ($row['tipoPregunta'] == 3) {
                                $result .= "<div style='padding-left:15px' class='form-check'>"
                                        . "<label><input type='radio' id='opcion" . $contador . "' name='opcion" . $contador . "' class='form-radio-input' id=''> "
                                        . $row2['opcion']
                                        . "</label>"
                                        . "</div>";
                            }
                            if ($row['tipoPregunta'] == 4) {
                                $result .= "<div style='padding-left:15px' class='form-check'>"
                                        . "<label><input type='checkbox' id='opcion" . $contador . "' name='opcion" . $contador . "' class='form-check-input' id=''> "
                                        . $row2['opcion']
                                        . "</label>"
                                        . "</div>";
                            }
                        } while ($row2 = $opcDAO->getArray($opc));
                    } else {
                        $result .= "No Hay opciones Pregunta";
                    }
                }
                $contador++;
            } while ($row = $modao->getArray($listado));
            $result .= "</div>"
                    . " <input type='text' name='contador' class='form-control' value='".$contador."' readonly> "
                    . "</form>"
                    . "</div>";
            return $result;
        } else {
            $result .= "<div class='form-group'>"
                    . "<h4>NO HAY PREGUNTAS REGISTRADAS</h4>"
                    . "</div>"
                    . "</div>"
                    . "</form>"
                    . "</div>";
            return $result;
        }
    }

}
