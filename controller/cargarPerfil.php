<?php

/* 
 * UNIVERSIDAD DE LA SIERRA SUR.
 * Licenciatura en Informática
 * Teconologias Web II.
 * LFSM.
 * Fecha 2017.
 * Descripción.
 */


function obtenerPerfilesTablaHTML(){
    $query = new Query();
    $rows = $query->obtenerPerfiles();
    echo '
        <table class="table table-hover"><thead>
            <tr>
                <td>Id Perfil</td>
                <td>Nombre</td>
                <td>Fecha Creaciónn</td>
                <td>Fecha Actualización</td>
                <td>Fecha Eliminación</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr></thead><tbody>';
    foreach ($rows as $row){
        echo  "<tr>";
            echo "<td>".$row['idPerfil']."</td>";        
            echo "<td>".$row['nombre']."</td>"; 
            echo "<td>".$row['fechaCreacion']."</td>"; 
            echo "<td>".$row['fechaActualizacion']."</td>"; 
            echo "<td>".$row['fechaEliminacion']."</td>"; 
//            echo "<td><a href='../controller/obtenerPerfil.php?idPerfil=".$row['idPerfil']."'>Editar</a></td>";
            echo "<td><a href='../views/modificarPHP.php?idPerfil=".$row['idPerfil']."'>Editar</a></td>";
            echo "<td><a href='../controller/eliminarPerfil.php?idPerfil=".$row['idPerfil']."'>Eliminar</a></td>"; 
            
        echo "</tr>";     
    }
    echo "</tbody></table>";
    
}