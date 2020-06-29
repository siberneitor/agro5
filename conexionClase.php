<?php
class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'datatable');
        define('usuario', 'ubuntu');
        define('password', 'Mexico1.');
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}

/*
$objeto = new Conexion();
$conexion = $objeto->Conectar();





 $consulta = "SELECT * FROM tabla1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        

        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);

        print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
*/


?>