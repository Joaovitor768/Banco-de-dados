<?php

$hostname = "localhost";
$bancodedados = "lord_camisetas";
$usuario = "usuario";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}
else {
    echo "Conectado com sucesso!";
}

?>