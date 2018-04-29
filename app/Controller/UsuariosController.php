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
            return $this->usuarios->allUsuarios();
        } else{
            return "Favor realizar login.";
        }
    }

    public function show($id)
    {
        if($this->auth->verify_logged()) {
            return $this->usuarios->getUsuario($id);
        } else{
            return "Favor realizar login.";
        }
    }

    public function store()
    {
        if($this->auth->verify_logged()) {
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
        } else{
            return "Favor realizar login.";
        }
    }

    public function update($id)
    {
        if($this->auth->verify_logged()) {
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
        } else{
            return "Favor realizar login.";
        }
    }

    public function destroy($id)
    {
        if($this->auth->verify_logged()) {
            return $this->usuarios->deleteUsuario($id);
        } else{
            return "Favor realizar login.";
        }
    }
}
$obj = new UsuariosController();
var_dump($obj->destroy(1));
