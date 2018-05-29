<?php

$nomeservidor = "localhost";
$nomedeusuario = "root";
$senhaservidor = "";
$nomedobd = "bd_gym";

$conexao = mysqli_connect($nomeservidor, $nomedeusuario, $senhaservidor, $nomedobd);

if (!$conexao) {
  die("Falha na conexão com o banco de dados");
}

 ?>
