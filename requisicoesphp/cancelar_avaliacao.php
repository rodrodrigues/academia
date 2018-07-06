<?php

include("conexao.php");
include("funcoes.php");

$id_usuario = $_GET['id'];

var_dump($id_usuario);

$query = "DELETE FROM avaliacao WHERE id_usuario = '$id_usuario'";

if (mysqli_query($conexao, $query)) {
  $_SESSION['mensagem'] = "Avaliação cancelada com sucesso!";
  header("Location: ../usuario/marca_avaliacao.php");
} else {
    echo "Erro: " . mysqli_error($conexao);
}

?>
