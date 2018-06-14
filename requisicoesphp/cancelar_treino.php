<?php

include("conexao.php");
include("funcoes.php");

$id_usuario = $_GET['id'];

var_dump($id_usuario);

$query = "DELETE FROM treino WHERE id_usuario = '$id_usuario'";

if (mysqli_query($conexao, $query)) {
    echo "Deletado";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

?>
