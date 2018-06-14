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

$observacao = $_POST['observacao'];

$id_usuario = $_SESSION['matuser'];

    $query = "UPDATE serie SET
          exercicio1 = '$ex1', exercicio2 = '$ex2' ,exercicio3 = '$ex3', exercicio4 = '$ex4', exercicio5 = '$ex5', exercicio6 =  '$ex6',
          exercicio7 = '$ex7', exercicio8 = '$ex8', exercicio9 = '$ex9', exercicio10 = '$ex10', exercicio11 = '$ex11', exercicio12 = '$ex12',
          repeticao1 = '$rep1', repeticao2 = '$rep2', repeticao3 = '$rep3', repeticao4 = '$rep4', repeticao5 = '$rep5', repeticao6 = '$rep6',
          repeticao7 = '$rep7', repeticao8 = '$rep8', repeticao9 = '$rep9', repeticao10 = '$rep10', repeticao11 = '$rep11', repeticao12 = '$rep12',
          quantidade1 = '$qtd1', quantidade2 = '$qtd2', quantidade3 = '$qtd3', quantidade4 = '$qtd4', quantidade5 = '$qtd5', quantidade6 = '$qtd6',
          quantidade7 = '$qtd7', quantidade8 = '$qtd8', quantidade9 = '$qtd9', quantidade10 = '$qtd10', quantidade11 = '$qtd11', quantidade12 = '$qtd12',
          observacao = '$observacao'";

     if (mysqli_query($conexao, $query)) {
        echo "serie cadastrada com sucesso!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conexao);

}
