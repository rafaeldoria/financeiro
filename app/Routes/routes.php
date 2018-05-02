<?php

$cont = $_POST["cont"]."Controller";
$action = $_POST["action"];

include ('../Controller/'.$cont.'.php');

$obj = new $cont;

switch ($cont) {
    case 'AuthController':
        switch ($action) {
            case 'login':
                $obj->auth($_POST);
                break;
            case 'registrar':
                $obj->registrarUsuario($_POST);
                break;

            default:
                // code...
                break;
        }
        break;
    case 'HomeController':
        switch ($action) {
            case 'index':
                $obj->index();
                break;

            default:
                // code...
                break;
        }
        break;

    default:
        // code...
        break;
}
