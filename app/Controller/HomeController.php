<?php

class AuthController
{


    function __construct()
    {

    }

    public function index()
    {
        header("Location: http://localhost/projeto_transacoes/app/View/login.php");
    }
}
$obj = new AuthController();
$obj->index();
