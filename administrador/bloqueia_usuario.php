<?php

  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();

 ?>

 <h1>Você está bloqueando o usuário de matrícula : <?= $_SESSION['matuser'] ?></h1>
 <h2> Nome: <?= $_SESSION['nomuser'] ?></h2>
 <h2> Telefone: <?= $_SESSION['teluser'] ?></h2>
 <h2> Email: <?= $_SESSION['emailuser'] ?></h2>
 <h2> Endereço: <?= $_SESSION['endeuser'] ?></h2>
  <form action="../requisicoesphp/bloquear_usuario.php" method="POST">
      <table>
        <tr>
            <td><input type="submit" name="enviar" value="bloquear"></td>
            <td><a href="dados_de_usuario.php" class="btn btn-default">Cancelar</a></td>
        </tr>
      </table>
      </form>

 <?php include("../padrao/rodape.php"); ?>
