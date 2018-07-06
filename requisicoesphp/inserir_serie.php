<?php

include("conexao.php");
include("funcoes.php");

$ex1 = $_POST['ex1'];
$ex2 = $_POST['ex2'];
$ex3 = $_POST['ex3'];
$ex4 = $_POST['ex4'];
$ex5 = $_POST['ex5'];
$ex6 = $_POST['ex6'];
$ex7 = $_POST['ex7'];
$ex8 = $_POST['ex8'];
$ex9 = $_POST['ex9'];
$ex10 = $_POST['ex10'];
$ex11 = $_POST['ex11'];
$ex12 = $_POST['ex12'];

$rep1 = $_POST['rep1'];
$rep2 = $_POST['rep2'];
$rep3 = $_POST['rep3'];
$rep4 = $_POST['rep4'];
$rep5 = $_POST['rep5'];
$rep6 = $_POST['rep6'];
$rep7 = $_POST['rep7'];
$rep8 = $_POST['rep8'];
$rep9 = $_POST['rep9'];
$rep10 = $_POST['rep10'];
$rep11 = $_POST['rep11'];
$rep12 = $_POST['rep12'];

$qtd1 = $_POST['qtd1'];
$qtd2 = $_POST['qtd2'];
$qtd3 = $_POST['qtd3'];
$qtd4 = $_POST['qtd4'];
$qtd5 = $_POST['qtd5'];
$qtd6 = $_POST['qtd6'];
$qtd7 = $_POST['qtd7'];
$qtd8 = $_POST['qtd8'];
$qtd9 = $_POST['qtd9'];
$qtd10 = $_POST['qtd10'];
$qtd11 = $_POST['qtd11'];
$qtd12 = $_POST['qtd12'];

$data = $_POST['data_treino'];

$observacao = $_POST['observacao'];

$id_usuario = $_SESSION['matuser'];

    $query = "INSERT INTO serie
          (mat_usuario, data,
          exercicio1, exercicio2,exercicio3, exercicio4, exercicio5, exercicio6, exercicio7, exercicio8, exercicio9, exercicio10, exercicio11, exercicio12,
          repeticao1, repeticao2, repeticao3, repeticao4, repeticao5, repeticao6, repeticao7, repeticao8, repeticao9, repeticao10, repeticao11, repeticao12,
          quantidade1, quantidade2, quantidade3, quantidade4, quantidade5, quantidade6, quantidade7, quantidade8, quantidade9, quantidade10, quantidade11, quantidade12,
          observacao)
          VALUES
          ('$id_usuario', '$data', '$ex1', '$ex2', '$ex3', '$ex4', '$ex5', '$ex6', '$ex7', '$ex8', '$ex9', '$ex10', '$ex11', '$ex12',
          '$rep1', '$rep2', '$rep3', '$rep4', '$rep5', '$rep6', '$rep7', '$rep8', '$rep9', '$rep10', '$rep11', '$rep12',
          '$qtd1', '$qtd2', '$qtd3', '$qtd4', '$qtd5', '$qtd6', '$qtd7', '$qtd8', '$qtd9', '$qtd10', '$qtd11', '$qtd12', '$observacao')";

    if (mysqli_query($conexao, $query))  {
    $_SESSION['mensagem'] = "serie cadastrada com sucesso!";
    header("Location: ../administrador/insere_serie.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conexao);
    }

?>
