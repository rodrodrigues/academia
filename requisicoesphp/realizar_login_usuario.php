<?php

include("conexao.php");
include("funcoes.php");

$matricula = $_POST["matricula"];
$senha = $_POST["senha"];

$senhamd5 = Md5($senha);

$query = "SELECT * FROM usuario WHERE matricula = '$matricula' AND senha = '$senhamd5' ";
$resultado = mysqli_query($conexao, $query);



if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);

    $_SESSION['matricula'] = $row['matricula'];
    $_SESSION['nome'] = $row['nome'];

    header("Location: ../usuario/dashboard.php");

} else {

    $_SESSION['MsgErro'] = "Usuário ou senha inválida" ;
    header("Location: ../usuario/login.php");
}

 ?>
