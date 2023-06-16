<?php

/* 
 * UNIVERSIDAD DE LA SIERRA SUR.
 * Licenciatura en Informática
 * Teconologias Web II.
 * LFSM.
 * Fecha.
 * Descripción.
 */

    require_once '../model/configBD/ConnectionDB.php';
    require_once '../model/Query.php';

    $message=NULL;
    //filtro de sanidad
    //desinfectando datos de entrada
    $nombre= filter_input(INPUT_POST, 'nombre',FILTER_SANITIZE_SPECIAL_CHARS);
    if(strlen($nombre)>0){
        //se inserta
        $model=new Query();
        $message=$model->crearPerfil($nombre);
        echo "".$message;
    }else{
        //no se inserta
        echo 'Completa tus datos';
    }