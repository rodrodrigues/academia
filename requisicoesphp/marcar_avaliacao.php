<?php

include("conexao.php");
include("funcoes.php");

 $idUsuario = $_SESSION['matricula'];
 $idPersonal = $_POST['idPersonal'];
 $descricao = $_POST['desc_avaliacao'];
 $data = $_POST['data_avaliacao'];
 $hora = $_POST['hora_avaliacao'];

if((!empty($idUsuario)) && (!empty($idPersonal)) && (!empty($descricao)) && (!empty($data))
&& (!empty($hora))){

  $query = "INSERT INTO avaliacao(id_usuario, id_admin, descricao, data, hora)
            VALUES ('$idUsuario', '$idPersonal', '$descricao', '$data', '$hora')";

  if (mysqli_query($conexao, $query)) {
    $_SESSION['mensagem'] = "Avaliação marcada com sucesso!";
    header("Location: ../usuario/marca_avaliacao.php");
  } else {
          echo "Error: " . $query . "<br>" . mysqli_error($conexao);
  }

} else{
  $_SESSION['mensagem'] = "campo vazio";
  header("Location: ../usuario/marca_avaliacao.php");
        
}



 ?>
