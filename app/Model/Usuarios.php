<?php
require_once '../../config/connectDB.php';

class Usuarios
{
    private $conn;
    function __construct()
    {
        $obj = new connectDB();
        $this->conn = $obj->getConnect();
    }

    public function allUsuarios()
    {
        $i = 0;
        $query = "SELECT u.login, u.nome_usuario, c.desc_conta from Usuarios u
        INNER JOIN Contas c ON c.conta_id = u.conta_id";
        $result = mysqli_query($this->conn, $query);
        if($result) {
            while($row = $result->fetch_assoc()) {
                $ret[$i] = $row;
                $i++;
            }
            return $ret;
        } else{
            return "Nenhum Usuário Encontrado.";
        }
    }

    public function getUsuario($id)
    {
        $query = "SELECT u.login, u.nome_usuario, c.desc_conta from Usuarios u
        INNER JOIN Contas c ON c.conta_id = u.conta_id
        where u.usuario_id = ".$id."";
        $result = mysqli_query($this->conn, $query);
        return $result->fetch_assoc();
    }

    public function addUsuario($data)
    {
        $query = "INSERT INTO Usuarios (login, senha, nome_usuario, conta_id, dt_created, dt_updated)
                VALUES ('".$data["login"]."', '".$data["senha"]."', '".$data["nome_usuario"]."', '".$data["conta_id"]."', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')";

        if ($this->conn->query($query)) {
            return "Novo usuário adicionado com sucesso";
        } else {
            return "Error: " . $query . "<br>" . $this->conn->error;
        }
    }

    public function updateUsuario($data)
    {
        $query = "UPDATE Usuarios SET login='".$data["login"]."', nome_usuario='".$data["nome_usuario"]."', conta_id='".$data["conta_id"]."', dt_updated='".date('Y-m-d H:i:s')."'
        WHERE usuario_id=".$data["usuario_id"]."";
        if ($this->conn->query($query)) {
            return "Usuario atualizado com sucesso";
        } else {
            return "Error: " . $query . "<br>" . $this->conn->error;
        }
    }

    public function deleteUsuario($id)
    {
        $query = "DELETE from Usuarios where conta_id = ".$id."";

        if ($this->conn->query($query)) {
            return "Usuario deletado";
        } else {
            return "Error: " . $query . "<br>" . $this->conn->error;
        }
    }

    public function auth($data)
    {
        $query = "SELECT u.usuario_id, u.login, u.senha, u.nome_usuario, c.permissao from Usuarios u
        INNER JOIN Contas c ON u.conta_id = c.conta_id
        where login = '".$data["login"]."'";
        $result = mysqli_query($this->conn, $query);
        if($result) {
            $user = $result->fetch_assoc();
            if(base64_decode($user["senha"])==$data["senha"]) {
                return $user;
            }else {
                return false;
            }
        } else{
            return false;
        }
    }
}
