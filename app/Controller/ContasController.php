<?php
require_once '../Model/Contas.php';
require_once 'AuthController.php';

class ContasController
{
    private $contas;
    private $auth;

    function __construct()
    {
        $this->contas = new Contas();
        $this->auth = new AuthController();
    }

    public function index()
    {
        if($this->auth->verify_logged()) {
            return $this->contas->allContas();
        } else{
            return "Favor realizar login.";
        }
    }

    public function show($id)
    {
        if($this->auth->verify_logged()) {
            return $this->contas->getConta($id);
        } else{
            return "Favor realizar login.";
        }
    }

    public function store()
    {
        if($this->auth->verify_logged()) {
            $conta = "Gerente";
            $sigla_conta = "ger";
            $data = array(
                "desc_conta" => $conta,
                "sigla_conta" => $sigla_conta
            );
            return $this->contas->addConta($data);
        } else{
            return "Favor realizar login.";
        }
    }

    public function update($id)
    {
        if($this->auth->verify_logged()) {
            $conta = "Supervisor";
            $sigla_conta = "sup";
            $data = array(
                "desc_conta" => $conta,
                "sigla_conta" => $sigla_conta,
                "conta_id" => $id,
            );
            return $this->contas->updateConta($data);
        } else{
            return "Favor realizar login.";
        }
    }

    public function destroy($id)
    {
        if($this->auth->verify_logged()) {
            return $this->contas->deleteConta($id);
        } else{
            return "Favor realizar login.";
        }
    }
}
$obj = new ContasController();
var_dump($obj->destroy(1));
