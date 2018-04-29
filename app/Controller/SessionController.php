<?php

class SessionController
{

    function __construct()
    {

    }

    public function record($data)
    {
        session_start();
        $_SESSION["user"][$data["usuario_id"]]["login"] = $data["login"];
        $_SESSION["user"][$data["usuario_id"]]["nome_usuario"] = $data["nome_usuario"];
        $_SESSION["user"][$data["usuario_id"]]["conta_id"] = $data["conta_id"];
    }
}
