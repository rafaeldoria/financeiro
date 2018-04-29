<?php
require_once '../Model/Usuarios.php';
require_once 'SessionController.php';

class AuthController
{
    private $usuarios;
    private $session;

    function __construct()
    {
        $this->usuarios = new Usuarios();
        $this->session = new SessionController();
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
            $this->session->record($user);
            return $user;
        } else{
            return "Usuário ou senha incorretos.";
        }
    }

    public function logoff()
    {
        $this->session->logoff();
        return "Logoff realizado.";
    }

    public function verify_logged()
    {
        if(isset($_SESSION["user_logged"])) {
            return true;
        } else{
            return false;
        }
    }
}
// $obj = new AuthController;
// var_dump($obj->auth());
// var_dump($obj->logoff());
// $obj->verify_logged();
