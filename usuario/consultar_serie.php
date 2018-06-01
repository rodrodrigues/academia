<?php
  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();
  verificaBloqueio();

 ?>

<?php

  include("../requisicoesphp/conexao.php");

  $matricula = $_SESSION['matricula'];

  echo $matricula;



  $query = "SELECT * FROM serie WHERE matricula_usuario = '$matricula'";
  $resultado = mysqli_query($conexao, $query);

  if (mysqli_num_rows($resultado) > 0) {

      $row = mysqli_fetch_assoc($resultado);

 ?>

 <table>
   <tr>
     <td> Exercicio </td>
     <td> Repetições </td>
     <td> Quantidade </td>
   </tr>
   <tr>
     <td> <?= $row['exercicio1'] ?> </td>
     <td> <?= $row['repeticao1'] ?> </td>
     <td> <?= $row['quantidade1'] ?> </td>
   </tr>
   <tr>
     <td> <?= $row['exercicio2'] ?> </td>
     <td> <?= $row['repeticao2'] ?> </td>
     <td> <?= $row['quantidade2'] ?> </td>
   </tr>
   <tr>
     <td> <?= $row['exercicio3'] ?> </td>
     <td> <?= $row['repeticao3'] ?> </td>
     <td> <?= $row['quantidade3'] ?> </td>
   </tr>
   <tr>
     <td> <?= $row['exercicio4'] ?> </td>
     <td> <?= $row['repeticao4'] ?> </td>
     <td> <?= $row['quantidade4'] ?> </td>
   </tr>
 </table>

<?php } else { ?>

  <h3>Você não tem uma série disponível </h3>

<?php } ?>

<?php include('../padrao/rodape.php'); ?>
