<?php

  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();

  ?>
  <?php
  $row = buscaUsuario($_SESSION['matuser']);

  if ($row['status'] == 0) {
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

    <?php } else {  ?>

      <h2>O usuário <?= $_SESSION['nomuser'] ?> encontra-se bloqueado.</h2>

      <h3>Caso suas pendencias tenham sido corrigidas, desbloqueie sua conta apertando em desbloquear</h3>
      <form action="../requisicoesphp/desbloquear_usuario.php" method="POST">
          <table>
            <tr>
                <td><input type="submit" name="enviar" value="desbloquear"></td>
                <td><a href="dados_de_usuario.php" class="btn btn-default">Cancelar</a></td>
            </tr>
          </table>
          </form>

    <?php } ?>

 <?php include("../padrao/rodape.php"); ?>
