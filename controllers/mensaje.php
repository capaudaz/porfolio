<?php
if($_POST){
    ob_start();
    set_error_handler("var_dump");
    require_once "../models/conexion.php";

    $nombreContacto = $_POST["nombreContacto"];
    $emailContacto = $_POST["emailContacto"];
    $asuntoContacto = $_POST['asuntoContacto'];
    $comentarioContacto = $_POST["comentarioContacto"];

    $conexion = new Conexion();
    $sql = "INSERT INTO `contactos` (`id`,`nombre`,`email`,`asunto`,`comentario`) VALUES (NULL,'$nombreContacto','$emailContacto','$asuntoContacto','$comentarioContacto')";
    $respuesta = $conexion->ejecutar($sql);
    header("Location:../index.php");
    die();
}