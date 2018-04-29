<?php
require_once '../Model/Usuarios.php';
require_once 'SessionController.php';

class AuthController
{
    private $usuarios;

    function __construct()
    {
        $this->usuarios = new Usuarios();
    }

    public function auth()
    {
        $login = "admin";
        $senha = "admin";
        $data = array(
            "login" => $login,
            "senha" => $senha,
        );
        $user = $this->usuarios->auth($data);
        if($user){
            $session = new SessionController();
            $session->record($user);
            return $user;
        } else{
            return "Usuário ou senha incorretos.";
        }
    }
}
$obj = new AuthController;
$obj->auth();
