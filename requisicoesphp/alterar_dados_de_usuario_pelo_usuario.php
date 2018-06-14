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
    $_SESSION['mensagem'] = "Email  alterado";
      header("Location:../usuario/altera_dados.php");
  } else {
    echo "xabu baby";
  }
}
  if (!empty($senha_usuario)) {
    $query = "UPDATE usuario SET senha = '$attsenha_usuario_md5' WHERE matricula = $matricula_usuario";

    if (mysqli_query($conexao, $query)) {
      $_SESSION['mensagem'] = "Senha alterada";
        header("Location:../usuario/altera_dados.php");

    } else {
      echo "xabu baby";
    }
}
if (empty($email_usuario) && empty($senha_usuario)) {
  $_SESSION['mensagem'] = "Nada foi alterado";
  header("Location:../usuario/altera_dados.php");

}

if (!empty($email_usuario) && !empty($senha_usuario)){
  $_SESSION['mensagem'] = "Email e senha alterados";
  header("Location:../usuario/altera_dados.php");

}


?>
