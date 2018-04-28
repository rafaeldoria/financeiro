<?php
require_once '../Model/Usuarios.php';

class UsuariosController
{
    private $usuarios;

    function __construct()
    {
        $this->usuarios = new Usuarios();
    }

    public function index()
    {
        return $this->usuarios->allUsuarios();
    }

    public function show($id)
    {
        return $this->usuarios->getUsuario($id);
    }

    public function store()
    {
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
    }

    public function update($id)
    {
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
    }

    public function destroy($id)
    {
        return $this->usuarios->deleteUsuario($id);
    }

}
