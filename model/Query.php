<?php

/*
 * UNIVERSIDAD DE LA SIERRA SUR.
 * Licenciatura en Informática
 * Teconologias Web II.
 * LFSM.
 * Fecha.
 * Descripción.
 */

/**
 * Description of Query
 *
 * @author LFSM
 */
class Query {
    public function crearPerfil($nombre){
        try{
            $model=new ConnectionDB();
            $connection =$model->getConection();
            $query="INSERT INTO perfil(nombre,fechaCreacion) "
                    ."VALUES (:nombre,:fechaCreacion)";
            //preparaa la consulta a realizar en la base de datos
            $statement=$connection->prepare($query);
            //cargar valores a consulta
            $name=$nombre;
            $bindParam = $statement->bindParam(':nombre',$name);
            $fecha=date("y-m-d");
            $statement->bindParam(':fechaCreacion',$fecha);
            //$statement->bindParam('fechaActualizacion',NULL, PDO::PARAM_NULL);
            //$statement->bindParam('fechaEliminacion',NULL, PDO::PARAM_NULL);
            //ejecutar la consulta
            $statement->execute();
            return "Insercion exitosa ";
        } catch (Exception $ex) {
            die ("Error al insertar perfil en la base de datos <br> ".$ex->getMessage());
            return "Completa tus datos";
        }
    }
    public function obtenerPerfiles(){
        try{
            $model=new ConnectionDB();
            $connection = $model->getConection();
            $query="select * from perfil";
            //preparaa la consulta a realizar en la base de datos
            $statement=$connection->prepare($query);
            $statement->execute();
            while($resultSet=$statement->fetch()){
                $rowResultSet[]=$resultSet;
            }
            return $rowResultSet;
        }catch(Exception $ex){
            die ("Error al insertar perfil en la base de datos <br> ".$ex->getMessage());
            return "Completa tus datos";
        }
    }
    public function eliminarPerfil($idPerfil){
        try{
            $model=new ConnectionDB();
            $connection =$model->getConection();
            $query="DELETE from perfil where idPerfil=:idPerfil";
            //preparaa la consulta a realizar en la base de datos
            $statement=$connection->prepare($query);
            //cargar valores a consulta
            $statement->bindParam(':idPerfil',$idPerfil);
            if(isset($statement)){
                $statement->execute();
            }else{
                return "Imposible la eliminación";
            }
            //ejecutar la consulta
            $statement->execute();
            return "Eliminación ";
        } catch (Exception $ex) {
            die ("Error al insertar perfil en la base de datos <br> ".$ex->getMessage());
            return "Completa tus datos";
        }
    }
    public function actualizarPerfil($idPerfil,$nombre){
        try{
            $model=new ConnectionDB();
            $connection =$model->getConection();
            $query="UPDATE perfil set nombre=:nombre, fechaActualizacion=:fechaActualizacion where idPerfil=:idPerfil";
            //preparaa la consulta a realizar en la base de datos
            $statement=$connection->prepare($query);
            //cargar valores a consulta
            //$name=$nombre;
            $statement->bindParam(':nombre',$nombre);
            $fecha=date("y-m-d");
            $statement->bindParam(':fechaActualizacion',$fecha);
            $statement->bindParam(':idPerfil', $idPerfil);
            //$statement->bindParam('fechaEliminacion',NULL, PDO::PARAM_NULL);
            //ejecutar la consulta
            if(isset($statement)){
            $statement->execute();
            return "Actualización exitosa";
            }
            else{
            return "No se pudo actualizar";
            }
            
            return "Act exitosa";
        } catch (Exception $ex) {
            die ("Error al Actualizar perfil en la base de datos <br> ".$ex->getMessage());
            return "Completa tus datos";
        }
    }
    public function obtenerPerfi($idPerfil){
        try{
            $model=new ConnectionDB();
            //realiza la conexión con la Base de Datos
            $connection = $model->getConection();
            $query="select * from perfil where idPerfil=:idPerfil";
            //preparaa la consulta a realizar en la base de datos
            $statement=$connection->prepare($query);
            $statement->bindParam('idPerfil', $idPerfil);
            $statement->execute();
            
            while($resultSet=$statement->fetch()){
                $rowResultSet[]=$resultSet;
            }
            //retorna el resultado
            return $rowResultSet;
        }catch(Exception $ex){
            die ("Error al insertar perfil en la base de datos <br> ".$ex->getMessage());
            return "Completa tus datos";
        }
    } 
}
