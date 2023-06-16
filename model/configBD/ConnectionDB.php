<?php

class ConnectionDB {
    
    public function getConection(){
        try{
            require_once 'paramsDB.php';
            $bd=new PDO(dsn, usuario, password);
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bd;
        }catch(PDOException $e){
            die('Error de conexión'.$e->getMessage());
        }
    }
}
