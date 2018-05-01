<?php

class HomeController
{

    function __construct()
    {

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
