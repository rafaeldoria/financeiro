<?php
require_once '../Model/Transacoes.php';

class TransacoesController
{
    private $contas;

    function __construct()
    {
        $this->contas = new Transacoes();
    }

    public function index()
    {
        return $this->contas->allTransacoes();
    }

    public function show($id)
    {
        return $this->contas->getTransacao($id);
    }

    public function store()
    {
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
    }

    public function update($id)
    {
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
    }

    public function destroy($id)
    {
        return $this->contas->deleteTransacao($id);
    }

    public function alterarStatusTransacao($id)
    {
        $status = "A";
        $usuario = 1;
        $data = array(
            "status" => $status,
            "usuario_acao" => $usuario,
            "transacao_id" => $id
        );
        return $this->contas->updateStatus($data);
    }

    public function alterarPrevisaoTransacao($id)
    {
        $previsao = date('Y-m-d', strtotime('+15 day'));
        $usuario = 1;
        $data = array(
            "dt_previsto" => $previsao,
            "usuario_acao" => $usuario,
            "transacao_id" => $id
        );
        return $this->contas->updatePrevisao($data);
    }

}

$obj = new TransacoesController();
var_dump($obj->alterarPrevisaoTransacao(2));
