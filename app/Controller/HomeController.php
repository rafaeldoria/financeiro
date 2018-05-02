<?php
require_once 'AuthController.php';
class HomeController
{

    function __construct()
    {
        $this->auth = new AuthController();
    }

    public function index()
    {
        if($this->auth->verify_logged()) {
            header("Location: ".ROOT."/app/View/index_transacoes.php");
        }else {
            header("Location: ".ROOT."/app/View/login.php");
        }
    }

}
