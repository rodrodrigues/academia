<?php

include("conexao.php");
include("funcoes.php");
<<<<<<< Updated upstream
verificaLogin();
$matricula = $_SESSION['matuser'];

$query = "DELETE  FROM usuario WHERE matricula = $matricula";


$resultado = mysqli_query($conexao, $query);

header("Location: ../administrador/dashboard.php");

=======

$senha_admin = $_POST['senha_admin'];
$senha_admin_md5 = md5($senha_admin);
$matriculauser = $_SESSION['matuser'];

if ($senha_admin_md5 == $_SESSION['senha']) {
  $query = "DELETE FROM usuario WHERE matricula = '$matriculauser";
  $resultado = mysqli_query($conexao, $query);

  if (!empty($resultado)) {
    echo "deletado";
  }
} else {
  echo "nem deletou";
}
>>>>>>> Stashed changes

?>
