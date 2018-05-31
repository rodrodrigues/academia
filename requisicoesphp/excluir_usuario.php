<?php

include("conexao.php");
include("funcoes.php");
verificaLogin();
$matricula = $_SESSION['matuser'];

$query = "DELETE  FROM usuario WHERE matricula = $matricula";


$resultado = mysqli_query($conexao, $query);

header("Location: ../administrador/dashboard.php");


?>
