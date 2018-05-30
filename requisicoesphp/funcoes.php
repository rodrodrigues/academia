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
      header("Location: ../administrador/login.php");
    } 
  }

 ?>
