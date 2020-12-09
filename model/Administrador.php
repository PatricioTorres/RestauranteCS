<?php
    require "./config/Conexion.php";

    class Administrador {
        public $cnx;

        function __construct()
        {
            $this->cnx = Conexion::ConectarDB();
            
        }

        function RegistrarAdmin($nombre,$contrasenia,$tipo_usuario,$sexo,$dni,$telef,$correo)
        {
            
        $query = "INSERT INTO administrador(nombre, contrasenia, tipo_usuario, sexo, dni, telefono, correo) VALUES (?,?,?,?,?,?,?)";
        $result = $this->cnx->prepare($query);
        $result->bindParam(1,$nombre);
        $clave_hash = password_hash($contrasenia,PASSWORD_DEFAULT);
         $result->bindParam(2,$clave_hash);
         $result->bindParam(3,$tipo_usuario);
         $result->bindParam(4,$sexo);
         $result->bindParam(5,$dni);
         $result->bindParam(6,$telef);
         $result->bindParam(7,$correo);
         if($result->execute()){
             return true;
         }
         return false;
        }

        function ValidarAdmin($correo,$clave){
            $query = "SELECT * FROM administrador WHERE correo = ?";

            $result = $this->cnx-> prepare($query);
            $result->bindParam(1,$correo);
            $result->execute();
            $fila = $result->fetch();
            if(password_verify($clave,$fila["contrasenia"])){
                return true;
            }
            return false;
        }
    }

?>