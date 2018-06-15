<?php
  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();
  verificaBloqueio();

 ?>

<?php

  include("../requisicoesphp/conexao.php");

  $matricula = $_SESSION['matricula'];

  $query = "SELECT * FROM serie WHERE mat_usuario = '$matricula'";

  $resultado = mysqli_query($conexao, $query);

  if ($resultado) {

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
     <tr>
         <td> <?= $row['exercicio5'] ?> </td>
         <td> <?= $row['repeticao5'] ?> </td>
         <td> <?= $row['quantidade5'] ?> </td>
     </tr>
     <tr>
         <td> <?= $row['exercicio6'] ?> </td>
         <td> <?= $row['repeticao6'] ?> </td>
         <td> <?= $row['quantidade6'] ?> </td>
     </tr>
     <tr>
         <td> <?= $row['exercicio7'] ?> </td>
         <td> <?= $row['repeticao7'] ?> </td>
         <td> <?= $row['quantidade7'] ?> </td>
     </tr>
     <tr>
         <td> <?= $row['exercicio8'] ?> </td>
         <td> <?= $row['repeticao8'] ?> </td>
         <td> <?= $row['quantidade8'] ?> </td>
     </tr>
     <tr>
         <td> <?= $row['exercicio9'] ?> </td>
         <td> <?= $row['repeticao9'] ?> </td>
         <td> <?= $row['quantidade9'] ?> </td>
     </tr>
     <tr>
         <td> <?= $row['exercicio10'] ?> </td>
         <td> <?= $row['repeticao10'] ?> </td>
         <td> <?= $row['quantidade10'] ?> </td>
     </tr>
     <tr>
         <td> <?= $row['exercicio11'] ?> </td>
         <td> <?= $row['repeticao11'] ?> </td>
         <td> <?= $row['quantidade11'] ?> </td>
     </tr>
     <tr>
         <td> <?= $row['exercicio12'] ?> </td>
         <td> <?= $row['repeticao12'] ?> </td>
         <td> <?= $row['quantidade12'] ?> </td>
     </tr>
 </table>

<?php } else { ?>

  <h3>Você não tem uma série disponível </h3>

<?php } ?>

<?php include('../padrao/rodape.php'); ?>
