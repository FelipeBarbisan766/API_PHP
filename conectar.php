<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema_cliente";

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco) or die("Erro Ao conectar");

?>