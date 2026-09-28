<?php

require_once __DIR__ . '/../config.php';

$conexao = new mysqli(
    DB_HOST,
    DB_USUARIO,
    DB_SENHA,
    DB_NOME
);

if ($conexao->connect_error) {
    die("Erro ao conectar ao banco: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");

?>