<?php

session_start();

  function encerraSessao(){
    session_unset();
    session_destroy();

  }

  function buscaUsuario($matricula_usuario){

      include("conexao.php");

      $query = "SELECT * FROM usuario WHERE matricula = '$matricula_usuario'";

      $resultado = mysqli_query($conexao, $query);

      if (mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);

        return $row;
      } else {

        echo "usuario inexistente";

      }

  }

  function verificaLogin(){

    if ($_SESSION['matricula'] == null){
      header("Location: ../index.php");
    }
  }

  function calculaIMC(){

    $peso = $_SESSION['peso'];
    $altura = $_SESSION['altura'];

    if (!empty($peso) && !empty($altura)){

      $altura = $altura / 100;

      $massa = $peso / ($altura * $altura);

      $massa = number_format($massa, 2, '.', ',');

      return $massa;

    }
  }



 ?>
