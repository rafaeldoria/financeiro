<?php
header('Content-Type: text/html; charset=utf-8');

define('ROOT','http://localhost/projeto_transacoes');

require 'app/Controller/HomeController.php';

$home = new HomeController();
$home->index();
