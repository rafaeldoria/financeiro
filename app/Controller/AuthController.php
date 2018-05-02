<?php
// if(isset($_SESSION) && $_SESSION["sistema"]){
//     include_once '../Model/Usuarios.php';
// }
require_once 'SessionController.php';

class AuthController
{
    private $usuarios;
    private $session;

    function __construct()
    {
        $this->session = new SessionController();
        if(!isset($_SESSION)){
            session_start();
            $_SESSION["sistema"] = true;
        }
    }

    public function auth($data)
    {
        include_once '../Model/Usuarios.php';
        $this->usuarios = new Usuarios();
        $login = $data["login"];
        $senha = $data["senha"];
        $data = array(
            "login" => $login,
            "senha" => $senha,
        );
        $user = $this->usuarios->auth($data);
        if($user) {
            $this->session->record($user);
            echo 1;
        }else {
            echo 0;
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

    public function registrarUsuario($data)
    {
        include_once '../Model/Usuarios.php';
        $this->usuarios = new Usuarios();
        $login = $data["login"];
        $senha = $data["senha"];
        $nome = $data["nome"];
        $conta = $data["conta"];
        $data = array(
            "login" => $login,
            "senha" => base64_encode($senha),
            "nome_usuario" => $nome,
            "conta_id" => $conta,
        );
        if($this->usuarios->novoUsuario($data)) {
            $_SESSION["index"] = true;
            return true;
        }else {
            return false;
        }
    }
}
// $obj = new AuthController;
// var_dump($obj->logoff());
// if($_POST){
//     $action = $_POST["action"];
//     switch ($action) {
//         case 'R':
//         $obj->registrarUsuario($_POST);
//         break;
//
//         case 'L':
//         $obj->auth($_POST);
//         break;
//
//         default:
//         // code...
//         break;
//     }
// }
