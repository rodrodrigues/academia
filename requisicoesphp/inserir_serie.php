<?php

include("conexao.php");
include("funcoes.php");

$ex1 = $_POST['ex1'];
$ex2 = $_POST['ex2'];
$ex3 = $_POST['ex3'];
$ex4 = $_POST['ex4'];

$rep1 = $_POST['rep1'];
$rep2 = $_POST['rep2'];
$rep3 = $_POST['rep3'];
$rep4 = $_POST['rep4'];

$qtd1 = $_POST['qtd1'];
$qtd2 = $_POST['qtd2'];
$qtd3 = $_POST['qtd3'];
$qtd4 = $_POST['qtd4'];

$id_usuario = $_SESSION['matuser'];

$query = "INSERT INTO serie
          (matricula_usuario, exercicio1, repeticao1, quantidade1, exercicio2, repeticao2, quantidade2, exercicio3, repeticao3, quantidade3, exercicio4, repeticao4, quantidade4)
          VALUES
          ('$id_usuario', '$ex1', '$rep1', '$qtd1', '$ex2', '$rep2', '$qtd2', '$ex3', '$rep3', '$qtd3', '$ex4', '$rep4', '$qtd4')";

if (mysqli_query($conexao, $query)) {
        echo "serie cadastrada com sucesso!";
} else {
      echo "Error: " . $query . "<br>" . mysqli_error($conexao);
}

?>
