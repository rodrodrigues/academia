<?php

include("conexao.php");
include("funcoes.php");

$matricula_usuario = $_SESSION['matuser'];
$nome_usuario = $_POST['attnome'];
$email_usuario = $_POST['attemail'];
$peso_usuario = $_POST['attpeso'];
$altura_usuario = $_POST['attaltura'];


if (!empty($nome_usuario)) {
  $query = "UPDATE usuario SET nome = '$nome_usuario' WHERE matricula = $matricula_usuario";

  if (mysqli_query($conexao, $query)) {
    echo " Nome alterado";
  } else {
    echo "xabu baby";
  }
}
if (!empty($email_usuario)) {
  $query = "UPDATE usuario SET email = '$email_usuario' WHERE matricula = $matricula_usuario";

  if (mysqli_query($conexao, $query)) {
    echo " Email alterado";
  } else {
    echo "xabu baby";
  }
}
if (!empty($peso_usuario)) {
  $query = "UPDATE usuario SET peso = '$peso_usuario' WHERE matricula = $matricula_usuario";

  if (mysqli_query($conexao, $query)) {
    echo " Peso alterado";
  } else {
    echo "xabu baby";
  }
}
if (!empty($altura_usuario)) {
  $query = "UPDATE usuario SET altura = '$altura_usuario' WHERE matricula = $matricula_usuario";

  if (mysqli_query($conexao, $query)) {
    echo " Altura alterada";
  } else {
    echo "xabu baby";
  }
}

if (empty($email_usuario) && empty($nome_usuario) && empty($peso_usuario) && empty($altura_usuario)) {
  echo " Nada foi alterado!";
}


?>
