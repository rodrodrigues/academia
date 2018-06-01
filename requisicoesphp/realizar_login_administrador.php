<?php

include("conexao.php");
include("funcoes.php");

$matricula = $_POST["matricula"];
$senha = $_POST["senha"];

$senhamd5 = Md5($senha);

$query = "SELECT * FROM funcionario WHERE matricula = '$matricula' AND senha = '$senhamd5' ";
$resultado = mysqli_query($conexao, $query);



if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);

    $_SESSION['matricula'] = $row['matricula'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['adminsenha'] = $row['senha'];

    header("Location: ../administrador/dashboard.php");

} else {

    $_SESSION['MsgErro'] = "Usuário ou senha inválida" ;
    header("Location: ../administrador/login.php");
}

 ?>
