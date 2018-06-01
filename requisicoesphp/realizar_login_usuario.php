<?php

include("conexao.php");
include("funcoes.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$senhamd5 = Md5($senha);

$query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senhamd5' ";
$resultado = mysqli_query($conexao, $query);

verificaBloqueio();

if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);

    $_SESSION['matricula'] = $row['matricula'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['peso'] = $row['peso'];
    $_SESSION['altura'] = $row['altura'];
    $_SESSION['status'] = $row['status'];

    if (empty($_SESSION['peso'] || $_SESSION['peso'] < 20)) {
      $_SESSION['msg'] = "Você necessita fazer uma avaliação";

        header("Location: ../usuario/dashboard.php");
    } else {
      $_SESSION['imc'] = calculaIMC();

      $imc = floatval($_SESSION['imc']);

      $_SESSION['msg'] = "Seu IMC é $imc";

      header("Location: ../usuario/dashboard.php");
    }
    // header("Location: ../usuario/dashboard.php");

} else {

    $_SESSION['MsgErro'] = "Usuário ou senha inválida" ;
    header("Location: ../usuario/login.php");
}

 ?>
