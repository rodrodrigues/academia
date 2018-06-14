<?php

include("conexao.php");
include("funcoes.php");

 $idUsuario = $_SESSION['matricula'];
 $idPersonal = $_POST['idPersonal'];
 $descricao = $_POST['desc_treino'];
 $data = $_POST['data_treino'];
 $hora = $_POST['hora_treino'];

if((!empty($idUsuario)) && (!empty($idPersonal)) && (!empty($descricao)) && (!empty($data))
&& (!empty($hora))){

  $query = "INSERT INTO treino(id_usuario, id_admin, data, hora, descricao)
            VALUES ('$idUsuario', '$idPersonal', '$data', '$hora', '$descricao')";

  if (mysqli_query($conexao, $query)) {
          echo "Treino marcado!";
  } else {
          echo "Error: " . $query . "<br>" . mysqli_error($conexao);
  }

} else{
        echo "campo vazio";
}



 ?>
