<?php

include("conexao.php");
include("funcoes.php");

$matricula = $_POST['matricula'];

$query = "SELECT * FROM usuario WHERE matricula = $matricula";

$resultado = mysqli_query($conexao, $query);

if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
    setcookie("nome", $row['nome']);
    setcookie("email", $row['email']);
    setcookie("peso", $row['peso']);
    setcookie("altura", $row['altura']);

    header("Location: ../administrador/altera_dados.php");
  } else {
    echo "ja sabe que deu xabu";
  }

?>