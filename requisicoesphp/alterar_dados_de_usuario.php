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
    $_SESSION['mensagem'] =  " Nome alterado";

  } else {
    echo "xabu baby";
  }
}
if (!empty($email_usuario)) {
  $query = "UPDATE usuario SET email = '$email_usuario' WHERE matricula = $matricula_usuario";

  if (mysqli_query($conexao, $query)) {
    $_SESSION['mensagem'] = " Email alterado";
  } else {
    echo "xabu baby";
  }
}
if (!empty($peso_usuario)) {
  $query = "UPDATE usuario SET peso = '$peso_usuario' WHERE matricula = $matricula_usuario";

  if (mysqli_query($conexao, $query)) {
    $_SESSION['mensagem'] = " Peso alterado";
  } else {
    echo "xabu baby";
  }
}
if (!empty($altura_usuario)) {
  $query = "UPDATE usuario SET altura = '$altura_usuario' WHERE matricula = $matricula_usuario";

  if (mysqli_query($conexao, $query)) {
    $_SESSION['mensagem'] = " Altura alterada";
  } else {
    echo "xabu baby";
  }
}

if (empty($email_usuario) && empty($nome_usuario) && empty($peso_usuario) && empty($altura_usuario)) {
  $_SESSION['mensagem'] = " Nada foi alterado!";
}

if (!empty($email_usuario) && !empty($peso_usuario)){
  $_SESSION['mensagem'] = " Email e Peso alterados";

}

if (!empty($email_usuario) && !empty($nome_usuario)){
  $_SESSION['mensagem'] = " Email e Altura alterados";

}

if (!empty($peso_usuario) && !empty($Altura_usuario)){
  $_SESSION['mensagem'] = " Peso e Altura alterados";

}

if (!empty($email_usuario) && !empty($nome_usuario)){
  $_SESSION['mensagem'] = " Nome e Email alterados";

}

if (!empty($nome_usuario) && !empty($peso_usuario)){
  $_SESSION['mensagem'] = " Nome e Peso alterados";

}

if (!empty($nome_usuario) && !empty($altura_usuario)){
  $_SESSION['mensagem'] = " Nome e Altura alterados";

}

if (!empty($email_usuario) && !empty($altura_usuario)){
  $_SESSION['mensagem'] = " Email e Altura alterados";

}

if (!empty($email_usuario) && !empty($nome_usuario) && !empty($peso_usuario)){
  $_SESSION['mensagem'] = " Nome, Email e Peso alterados";

}

if (!empty($altura_usuario) && !empty($nome_usuario) && !empty($peso_usuario)){
  $_SESSION['mensagem'] = " Nome, Altura e Peso alterados";

}

if (!empty($email_usuario) && !empty($altura_usuario) && !empty($peso_usuario)){
  $_SESSION['mensagem'] = " Altura, Email e Peso alterados";

}

if (!empty($email_usuario) && !empty($nome_usuario) && !empty($altura_usuario)){
  $_SESSION['mensagem'] = " Nome, Email e Altura alterados";

}


if (!empty($email_usuario) && !empty($nome_usuario) && !empty($peso_usuario) && !empty($altura_usuario)){
  $_SESSION['mensagem'] = " Nome, Email, Peso e Altura alterados";

}


  header("Location:../administrador/altera_dados.php");




?>
