<?php

    /*function conectar(){
        $user = "root";
        $pass = "";
        $server = "localhost";
        $db = "restaurant1";

        $con = new mysqli($server,$user,$pass,$db);

        if($con->connect_errno){
            die("No se conecto" . $con->connect_errno);
        }
        return $con;
    }*/

    class Conexion{
        static function ConectarDB()
        {
            try{
                require "Global.php";
                $cnx = new PDO(DSN,USERNAME,PASSWORD);
                return $cnx;
            }catch(PDOException $ex){
                die($ex->getMessage());
            }
        }
    }

?>