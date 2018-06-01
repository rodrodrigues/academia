<?php

include("conexao.php");
include("funcoes.php");

verificaLogin();

$matricula = $_SESSION['matuser'];

$query = "UPDATE usuario SET status = 1 WHERE matricula = $matricula";

$resultado = mysqli_query($conexao, $query);

$_SESSION['msgAdmin'] = "Bloqueio concluido";

header("Location: ../administrador/dashboard.php");

?>
