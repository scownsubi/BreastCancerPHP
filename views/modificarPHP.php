<?php

/* 
 * UNIVERSIDAD DE LA SIERRA SUR.
 * Licenciatura en Informática
 * Teconologias Web II.
 * LFSM
 * Fecha 2017.
 * Descripción.
 */

//Establecer la conexión a la base de datos
require_once '../model/configBD/ConnectionDB.php';
//Agregar la librería del CRUD
require_once '../model/Query.php';

require_once '../controller/obtenerPerfil.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="jquery/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>
            Modificar Perfil
        </title>
    </head>
    <body>
        <div class="container text-center">
            <h1>Modificar Perifl</h1>
            <?php
                obtenerPerfil();
            ?>
        </div>
    </body>
</html>
