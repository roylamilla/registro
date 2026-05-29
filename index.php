<?php

require_once "config/database.php";
require_once "controllers/RegistroController.php";

$controlador = new RegistroController($conn);

$vista = isset($_GET["vista"]) ? $_GET["vista"] : "inicio";

switch($vista){

    case "formulario":

        if(isset($_POST["registrar"])) {
            $controlador->guardar();
        }

        include "views/formulario.php";
    break;

    case "lista":

        $datos = $controlador->listar();

        include "views/lista.php";
    break;

    default:

        include "views/inicio.php";
    break;
}

?>