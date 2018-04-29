<?php
require_once '../Model/Usuarios.php';
require_once 'AuthController.php';

class UsuariosController
{
    private $usuarios;
    private $auth;

    function __construct()
    {
        $this->usuarios = new Usuarios();
        $this->auth = new AuthController();
    }

    public function index()
    {
        if($this->auth->verify_logged()) {
            if($_SESSION["user_logged"]["conta_id"]<=4) {
                return $this->usuarios->allUsuarios();
            }else {
                return "HomePage";
            }
        } else{
            return "Favor realizar login.";
        }
    }

    public function show($id)
    {
        if($this->auth->verify_logged()) {
            if($_SESSION["user_logged"]["conta_id"]<=4) {
                return $this->usuarios->getUsuario($id);
            }else {
                return "HomePage";
            }
        } else{
            return "Favor realizar login.";
        }
    }

    public function store()
    {
        if($this->auth->verify_logged()) {
            if($_SESSION["user_logged"]["conta_id"]<=4) {
                $login = "teste";
                $senha = "admin";
                $nome = "teste";
                $conta = 2;
                $data = array(
                    "login" => $login,
                    "senha" => base64_encode($senha),
                    "nome_usuario" => $nome,
                    "conta_id" => $conta
                );
                return $this->usuarios->addUsuario($data);
            }else {
                return "HomePage";
            }
        } else{
            return "Favor realizar login.";
        }
    }

    public function update($id)
    {
        if($this->auth->verify_logged()) {
            if($_SESSION["user_logged"]["conta_id"]<=3) {
                $login = "admin";
                $nome = "Administrador";
                $conta = 1;
                $data = array(
                    "login" => $login,
                    "nome_usuario" => $nome,
                    "conta_id" => $conta,
                    "usuario_id" => $id
                );
                return $this->usuarios->updateUsuario($data);
            }else {
                return "HomePage";
            }
        } else{
            return "Favor realizar login.";
        }
    }

    public function destroy($id)
    {
        if($this->auth->verify_logged()) {
            if($_SESSION["user_logged"]["conta_id"]<=3) {
                return $this->usuarios->deleteUsuario($id);
            }else {
                return "HomePage";
            }
        } else{
            return "Favor realizar login.";
        }
    }
}
