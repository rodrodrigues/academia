<?php

include("conexao.php");
include("funcoes.php");

verificaLogin();

$matricula = $_SESSION['matuser'];

$query = "UPDATE usuario SET status = 0 WHERE matricula = $matricula";

$resultado = mysqli_query($conexao, $query);

$_SESSION['msgAdmin'] = "Desbloqueio concluido";

header("Location: ../administrador/busca_usuario.php");

?>
