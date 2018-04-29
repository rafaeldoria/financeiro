<?php
require_once '../Model/Usuarios.php';

class AuthController
{
    private $usuarios;

    function __construct()
    {
        $this->usuarios = new Usuarios();
    }

    public function auth()
    {
        $login = "adminn";
        $senha = "admin";
        $data = array(
            "login" => $login,
            "senha" => $senha,
        );
        $user = $this->usuarios->auth($data);
        return $user;
    }
}

$obj = new AuthController();
var_dump($obj->auth());
