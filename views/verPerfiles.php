<?php

/* 
 * UNIVERSIDAD DE LA SIERRA SUR.
 * Licenciatura en Informática
 * Teconologias Web II.
 * LSFM.
 * Fecha 2017.
 * Descripción.
 */

require_once '../model/configBD/ConnectionDB.php';
require_once '../model/Query.php';
require_once '../controller/cargarPerfil.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ver perfiles</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="jquery/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <nav class="container navbar navbar-default ">
                <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
                </button>
                           <a class="navbar-brand" href="#">Unsis</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="insertar.html">Insertar perfiles</a></li>
                      <li><a href="verPerfiles.php">Ver perfiles</a></li>
                  </ul>
                </div>
              </div>
            </nav>
	</div>
        <div class="container">
            <h1>
            Lista de Pefiles
            </h1>
            <?php 
            obtenerPerfilesTablaHTML();
            ?>
            <a href="insertar.html">Registrar Perfiles</a>
        </div>
        
    </body>
</html>