<?php

include("conexao.php");
include("funcoes.php");

$email_usuario = $_POST['attemail'];
$senha_usuario = $_POST['attsenha'];
$matricula_usuario = $_SESSION['matricula'];
$attsenha_usuario_md5 = md5($senha_usuario);

if (!empty($email_usuario)) {
  $query = "UPDATE usuario SET email = '$email_usuario' WHERE matricula = $matricula_usuario";

  if (mysqli_query($conexao, $query)) {
    echo "Email alterado";
  } else {
    echo "xabu baby";
  }
}
  if (!empty($senha_usuario)) {
    $query = "UPDATE usuario SET senha = '$attsenha_usuario_md5' WHERE matricula = $matricula_usuario";

    if (mysqli_query($conexao, $query)) {
      echo " Senha alterada";
    } else {
      echo "xabu baby";
    }
}
if (empty($email_usuario) && empty($senha_usuario)) {
  echo "Nada foi alterado!";
}


?>
