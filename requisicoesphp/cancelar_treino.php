<?php

include("conexao.php");
include("funcoes.php");

$id_usuario = $_GET['id'];

var_dump($id_usuario);

$query = "DELETE FROM treino WHERE id_usuario = '$id_usuario'";

if (mysqli_query($conexao, $query)) {
  $_SESSION['mensagem'] = "Treino cancelado com sucesso!";
  header("Location: ../usuario/marca_treino.php");
} else {
    echo "Erro: " . mysqli_error($conexao);
}

?>
