<?php
require_once '../Model/Transacoes.php';
require_once 'AuthController.php';

class TransacoesController
{
    private $transacoes;
    private $auth;

    function __construct()
    {
        $this->transacoes = new Transacoes();
        $this->auth = new AuthController();
    }

    public function index()
    {
        if($this->auth->verify_logged()) {
            if($_SESSION["user_logged"]["conta_id"]<=3) {
                return $this->transacoes->allTransacoes();
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
            $transacao = $this->transacoes->getTransacao($id);
            if($_SESSION["user_logged"]["conta_id"] <= $transacao["conta_id"]) {
                return $transacao;
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
            $transacao = "Depóstio caixa.";
            $previsao = date('Y-m-d');
            $valor = 2800.00;
            $usuario = $_SESSION["user_logged"]["usuario_id"];
            $conta = $_SESSION["user_logged"]["conta_id"];
            $data = array(
                "desc_transacao" => $transacao,
                "dt_previsto" => $previsao,
                "valor" => $valor,
                "usuario_responsavel" => $usuario,
                "conta_id" => $conta
            );
            return $this->transacoes->addTransacao($data);
        } else{
            return "Favor realizar login.";
        }
    }

    public function update($id)
    {
        if($this->auth->verify_logged()) {
            if($_SESSION["user_logged"]["conta_id"]<=3) {
                $transacao = "Depósito caixa.";
                $previsao = date('Y-m-d');
                $valor = 2800.00;
                $usuario = $_SESSION["user_logged"]["usuario_id"];
                $data = array(
                    "desc_transacao" => $transacao,
                    "dt_previsto" => $previsao,
                    "valor" => $valor,
                    "usuario_acao" => $usuario,
                    "transacao_id" => $id
                );
                return $this->transacoes->updateTransacao($data);
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
            if($_SESSION["user_logged"]["conta_id"]<=2) {
                return $this->transacoes->deleteTransacao($id);
            }else {
                return "HomePage";
            }
        } else{
            return "Favor realizar login.";
        }
    }

    public function alterarStatusTransacao($id)
    {
        if($this->auth->verify_logged()) {
            if($_SESSION["user_logged"]["conta_id"]<=4) {
                $status = "F";
                $usuario = $_SESSION["user_logged"]["usuario_id"];
                $data = array(
                    "status" => $status,
                    "usuario_acao" => $usuario,
                    "transacao_id" => $id
                );
                return $this->transacoes->updateStatus($data);
            }else {
                return "HomePage";
            }
        } else{
            return "Favor realizar login.";
        }
    }

    public function alterarPrevisaoTransacao($id)
    {
        if($this->auth->verify_logged()) {
            if($_SESSION["user_logged"]["conta_id"]<=4) {
                $previsao = date('Y-m-d', strtotime('+15 day'));
                $usuario = $_SESSION["user_logged"]["usuario_id"];
                $data = array(
                    "dt_previsto" => $previsao,
                    "usuario_acao" => $usuario,
                    "transacao_id" => $id
                );
                return $this->transacoes->updatePrevisao($data);
            }else {
                return "HomePage";
            }
        } else{
            return "Favor realizar login.";
        }
    }

    public function transacaoesUsuario()
    {
        if($this->auth->verify_logged()) {
            return $this->transacoes->getTransacoesUsuario();
        } else{
            return "Favor realizar login.";
        }
    }

}
