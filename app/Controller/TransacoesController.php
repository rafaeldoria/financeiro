<?php
require_once '../Model/Transacoes.php';
require_once 'AuthController.php';

class TransacoesController
{
    private $contas;
    private $auth;

    function __construct()
    {
        $this->contas = new Transacoes();
        $this->auth = new AuthController();
    }

    public function index()
    {
        if($this->auth->verify_logged()) {
            return $this->contas->allTransacoes();
        } else{
            return "Favor realizar login.";
        }
    }

    public function show($id)
    {
        if($this->auth->verify_logged()) {
            return $this->contas->getTransacao($id);
        } else{
            return "Favor realizar login.";
        }
    }

    public function store()
    {
        if($this->auth->verify_logged()) {
            $transacao = "Transferência para conta Diretor.";
            $previsao = date('Y-d-m', strtotime('+5 day'));
            $valor = 1500.00;
            $usuario = 1;
            $conta = 1;
            $data = array(
                "desc_transacao" => $transacao,
                "dt_previsto" => $previsao,
                "valor" => $valor,
                "usuario_responsavel" => $usuario,
                "conta_id" => $conta
            );
            return $this->contas->addTransacao($data);
        } else{
            return "Favor realizar login.";
        }
    }

    public function update($id)
    {
        if($this->auth->verify_logged()) {
            $transacao = "Transferência para conta Diretor.";
            $previsao = date('Y-d-m', strtotime('+5 day'));
            $valor = 1500.00;
            $usuario = 1;
            $data = array(
                "desc_transacao" => $transacao,
                "dt_previsto" => $previsao,
                "valor" => $valor,
                "usuario_acao" => $usuario,
                "transacao_id" => $id
            );
            return $this->contas->updateTransacao($data);
        } else{
            return "Favor realizar login.";
        }
    }

    public function destroy($id)
    {
        if($this->auth->verify_logged()) {
            return $this->contas->deleteTransacao($id);
        } else{
            return "Favor realizar login.";
        }
    }

    public function alterarStatusTransacao($id)
    {
        if($this->auth->verify_logged()) {
            $status = "A";
            $usuario = 1;
            $data = array(
                "status" => $status,
                "usuario_acao" => $usuario,
                "transacao_id" => $id
            );
            return $this->contas->updateStatus($data);
        } else{
            return "Favor realizar login.";
        }
    }

    public function alterarPrevisaoTransacao($id)
    {
        if($this->auth->verify_logged()) {
            $previsao = date('Y-m-d', strtotime('+15 day'));
            $usuario = 1;
            $data = array(
                "dt_previsto" => $previsao,
                "usuario_acao" => $usuario,
                "transacao_id" => $id
            );
            return $this->contas->updatePrevisao($data);
        } else{
            return "Favor realizar login.";
        }
    }

}

$obj = new TransacoesController();
var_dump($obj->index());
