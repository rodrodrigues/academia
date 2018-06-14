<?php

include("conexao.php");
include("funcoes.php");

$matricula = $_POST['matricula'];

$query = "SELECT * FROM usuario WHERE matricula = $matricula";

$resultado = mysqli_query($conexao, $query);


if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);

    $_SESSION['nomuser'] = $row['nome'];
    $_SESSION['teluser'] = $row['telefone'];
    $_SESSION['emailuser'] = $row['email'];
    $_SESSION['endeuser'] = $row['endereco'];

    $_SESSION['nomeuser'] = $row['nome'];

    $_SESSION['matuser'] = $matricula;
    header("Location: ../administrador/altera_dados.php");
  } else {
    $_SESSION['mensagem'] = "Usuário não encontrado";
    header("Location:../administrador/busca_usuario.php");
    echo "Usuario não encontrado";
  }

?>
