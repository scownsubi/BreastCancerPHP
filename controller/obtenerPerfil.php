<?php

/* 
 * UNIVERSIDAD DE LA SIERRA SUR.
 * Licenciatura en Informática
 * Teconologias Web II.
 * LFSM.
 * Fecha 2017.
 * Descripción.
 */
    function  obtenerPerfil(){
        //echo 'Ingresando obtener Perfil';
        //Si esto existe
        if(isset($_GET['idPerfil'])){
            //Obtenemos de algun formulario de idPerfil
            $idPerfil=$_GET['idPerfil'];
            //Creamos una onstancia a la clase Query
            $query = new Query();
            //invocar el metodo de obtener perfil enviando como parametro el Id Perfil
            $rowResultSet = $query->obtenerPerfi($idPerfil);
        }
        //Recorre la lista de Registros Row Retult Set y Muestra osdatos en una caja de html
        foreach ($rowResultSet as $row){
//        echo "Hola ".$row['nombre'];
        echo '
        <div class="container">
            
            <div class="row">
                <div class="col-sm-offset-4 col-sm-4">
                    <form method="post" action="../controller/actualizarPerfil.php" role="form">
                        <div class="form-group">
                            <label >Nombre: </label>
                                <input id="nombre" name="nombre" value="'.$row['nombre'].'">
                                    <br><br>
                                <input type="submit" class="btn btn-success" value="Modificar Perfil">
                        </div>
                    </form>
                </div>
            </div>
        </div>';
        }
        
        
        
        
     
    }
