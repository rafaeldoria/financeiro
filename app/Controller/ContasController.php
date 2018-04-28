<?php
require_once '../Model/Contas.php';

class ContasController
{
    private $contas;

    function __construct()
    {
        $this->contas = new Contas();
    }

    public function index()
    {
        return $this->contas->allContas();
    }

    public function show($id)
    {
        return $this->contas->getConta($id);
    }

    public function store()
    {
        $conta = "Gerente";
        $sigla_conta = "ger";
        $data = array(
            "desc_conta" => $conta,
            "sigla_conta" => $sigla_conta
        );
        return $this->contas->addConta($data);
    }

    public function update($id)
    {
        $conta = "Supervisor";
        $sigla_conta = "sup";
        $data = array(
            "desc_conta" => $conta,
            "sigla_conta" => $sigla_conta,
            "conta_id" => $id,
        );
        return $this->contas->updateConta($data);
    }

    public function destroy($id)
    {
        return $this->contas->deleteConta($id);
    }

}
