<?php
require_once 'constants.php';
class connectDB {
    public function getConnect()
    {
        $usuario = USUARIO;
        $host = HOST;
        $senha = SENHA;
        $base = BASE;

        $connect = mysqli_connect($host, $usuario, $senha, $base);

        if (!$connect) {
            echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        return $connect;

        mysqli_close($connect);
    }
}
