<?php

class SessionController
{

    function __construct()
    {
        session_start();
        session_cache_expire(30);
    }

    public function record($data)
    {
        $_SESSION["user_logged"]["usuario_id"] = $data["usuario_id"];
        $_SESSION["user_logged"]["login"] = $data["login"];
        $_SESSION["user_logged"]["nome_usuario"] = $data["nome_usuario"];
        $_SESSION["user_logged"]["permissao"] = $data["permissao"];
        $_SESSION["user_logged"]["conta_id"] = $data["conta_id"];
        $_SESSION["user_logged"]["logged"] = date('H:i:s');
    }

    public function logoff()
    {
        if(isset($_SESSION["user_logged"])) {
            $_SESSION["cache_login"]["login"] = $_SESSION["user_logged"]["login"];
            $_SESSION["cache_login"]["cache"] = date('H:i:s');
            unset($_SESSION['user_logged']);
        }
    }
}
