<?php

/* 
 * UNIVERSIDAD DE LA SIERRA SUR.
 * Licenciatura en Informática
 * Teconologias Web II.
 * LFSM.
 * Fecha 2017.
 * Descripción.
 */

require_once '../model/configBD/ConnectionDB.php';
require_once '../model/Query.php';
//si existe
if(isset($_GET['idPerfil'])){
    $idPerfil = $_GET['idPerfil'];
    $query = new Query();
    
    $message = $query->eliminarPerfil($idPerfil);
    
    echo $message;
    echo "";
}