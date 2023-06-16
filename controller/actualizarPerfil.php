<?php

/* 
 * UNIVERSIDAD DE LA SIERRA SUR.
 * Licenciatura en Informática
 * Teconologias Web II.
 * LFSM.
 * Fecha 2018.
 * Descripción.
 */
    require_once '../model/configBD/ConnectionDB.php';
    require_once '../model/Query.php';
    $message=NULL;
    //filtro de sanidad
    //desinfectando datos de entrada
    $nombre= filter_input(INPUT_POST, 'nombre',FILTER_SANITIZE_SPECIAL_CHARS);
    $idPerfil= filter_input(INPUT_POST, 'idPerfil',FILTER_SANITIZE_SPECIAL_CHARS);
    if(strlen($nombre)>0){
        //se inserta
        $model=new Query();
        //$model->eliminarPerfil($idPerfil);
        //$model->crearPerfil($nombre);
        $message=$model->actualizarPerfil($idPerfil,$nombre);
        echo "Actualizado".$message;
    }else{
        //no se inserta
        echo 'Completa tus datos';
    }
