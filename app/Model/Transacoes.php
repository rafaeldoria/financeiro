<?php
require_once '../../config/connectDB.php';

class Transacoes
{
    private $conn;
    function __construct()
    {
        $obj = new connectDB();
        $this->conn = $obj->getConnect();
    }

    public function allTransacoes()
    {
        $i = 0;
        $query = "select t.desc_transacao, t.dt_realizado, t.dt_previsto, t.valor, t.status, u.login, c.desc_conta from Transacoes t
        INNER JOIN Contas c ON c.conta_id = t.conta_id
        INNER JOIN Usuarios u ON u.usuario_id = t.usuario_responsavel";
        $result = mysqli_query($this->conn, $query);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $ret[$i] = $row;
                $i++;
            }
            return $ret;
        } else{
            return "Nenhuma Transação Encontrada.";
        }
    }

    public function getTransacao($id)
    {
        $query = "select t.desc_transacao, t.dt_realizado, t.dt_previsto, t.valor, t.status, u.login, us.login, c.desc_conta from Transacoes t
        INNER JOIN Contas c ON c.conta_id = t.conta_id
        INNER JOIN Usuarios u ON u.usuario_id = t.usuario_responsavel
        INNER JOIN Usuarios us ON us.usuario_id = t.usuario_acao
        where t.transacao_id = ".$id."";
        $result = mysqli_query($this->conn, $query);
        return $result->fetch_assoc();
    }

    public function addTransacao($data)
    {
        $sql = "INSERT INTO Transacoes (desc_transacao, dt_previsto, valor, usuario_responsavel, conta_id, dt_created, dt_updated)
                VALUES ('".$data["desc_transacao"]."', '".$data["dt_previsto"]."', '".$data["valor"]."', '".$data["usuario_responsavel"]."', '".$data["conta_id"]."', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')";

        if ($this->conn->query($sql)) {
            return "Nova transação adicionado com sucesso.";
        } else {
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function updateTransacao($data)
    {
        $sql = "UPDATE Transacoes SET desc_transacao='".$data["desc_transacao"]."', dt_previsto='".$data["dt_previsto"]."', valor='".$data["valor"]."', usuario_acao='".$data["usuario_acao"]."', dt_updated='".date('Y-m-d H:i:s')."'
        WHERE transacao_id=".$data["transacao_id"]."";
        if ($this->conn->query($sql)) {
            return "Transacão atualizada com sucesso.";
        } else {
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function deleteTransacao($id)
    {
        $sql = "DELETE from Transacoes where transacao_id = ".$id."";

        if ($this->conn->query($sql)) {
            return "Transação deletada.";
        } else {
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function updateStatus($data)
    {
        $sql = "UPDATE Transacoes SET status='".$data["status"]."', usuario_acao='".$data["usuario_acao"]."', dt_updated='".date('Y-m-d H:i:s')."'
        WHERE transacao_id=".$data["transacao_id"]."";
        if ($this->conn->query($sql)) {
            return "Status Transacão alterado com sucesso.";
        } else {
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function updatePrevisao($data)
    {
        $sql = "UPDATE Transacoes SET dt_previsto='".$data["dt_previsto"]."', usuario_acao='".$data["usuario_acao"]."', dt_updated='".date('Y-m-d H:i:s')."'
        WHERE transacao_id=".$data["transacao_id"]."";
        if ($this->conn->query($sql)) {
            return "Data Prevista da Transacão atualizada com sucesso.";
        } else {
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
}
