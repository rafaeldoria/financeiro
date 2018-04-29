<?php
require_once '../../config/connectDB.php';

class Contas
{
    private $conn;
    function __construct()
    {
        $obj = new connectDB();
        $this->conn = $obj->getConnect();
    }

    public function allContas()
    {
        $i = 0;
        $query = "SELECT * from Contas";
        $result = mysqli_query($this->conn, $query);
        if($result) {
            while($row = $result->fetch_assoc()) {
                $ret[$i] = $row;
                $i++;
            }
            return $ret;
        }else {
            return "Nenhuma conta encotrada.";
        }
    }

    public function getConta($id)
    {
        $query = "SELECT * from Contas where conta_id = ".$id."";
        $result = mysqli_query($this->conn, $query);
        return $result->fetch_assoc();
    }

    public function addConta($data)
    {
        $sql = "INSERT INTO Contas (desc_conta, sigla_conta, dt_created, dt_updated)
                VALUES ('".$data["desc_conta"]."', '".$data["sigla_conta"]."', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')";

        if ($this->conn->query($sql)) {
            return "Nova conta adicionada com sucesso.";
        } else {
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function updateConta($data)
    {
        $sql = "UPDATE Contas SET desc_conta='".$data["desc_conta"]."', sigla_conta='".$data["sigla_conta"]."', dt_updated='".date('Y-m-d H:i:s')."'
        WHERE conta_id=".$data["conta_id"]."";
        if ($this->conn->query($sql)) {
            return "Conta atualizada com sucesso.";
        } else {
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function deleteConta($id)
    {
        $sql = "DELETE from Contas where conta_id = ".$id."";
        if ($this->conn->query($sql)) {
            return "Conta deletada.";
        } else {
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
}
