<?php

require "../model/Administrador.php";

$admin = new Administrador();

    switch($_REQUEST["operador"]){

        case "validar_administrador":

            if(isset($_POST["correo"],$_POST["contrasenia"]) && !empty($_POST["correo"]) && !empty($_POST["contrasenia"])){
                if($admin->ValidarAdim($_POST["correo"],$_POST["contrasenia"])){
                    $response ="succes";
                }else{
                    $response = "not found";
                }
            }else{
                $response = "requerid";
            }

            echo $response;


        brak;
    }
?>