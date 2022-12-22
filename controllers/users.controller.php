<?php

class ControllerUsers{
    function ctrLoginUser(){
        if (isset($_POST["ingUsuario"])){
            $usuario = "marcos@virgala.com.ar";
            $password = "123456";
            if($_POST["ingUsuario"] == $usuario && $_POST["ingPassword"] == $password){
                $_SESSION["iniciarSesion"] = "ok";
                echo var_dump($_SESSION["iniciarSesion"]);
                sleep(5);
            }else{
                echo "hola mundo";
                sleep(5);
            }
        }
    }
}