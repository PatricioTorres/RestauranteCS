<?php

require "model/Administrador.php";

$admin = new Administrador();

$nombre = "Jhonatan Acuna";
$clave = "12345678";
$tipo = 1;
$sexo = 'M';
$dni = 75971503;
$tele = 997646528;
$correo = "mindoa741@gmail.com";

/*if($admin->RegistrarAdmin($nombre,$clave,$tipo,$sexo,$dni,$tele,$correo)){
    echo "registro exitoso";
}else{
    echo "Error 0:";
}*/

if($admin->ValidarAdmin($correo,$clave)){
    echo "Usuario encontrado";
}else{
    echo "No encontrado";
}

?>