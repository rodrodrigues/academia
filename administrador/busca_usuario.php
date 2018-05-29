<?php
    include("../padrao/cabecalho.php");
    include("../requisicoesphp/funcoes.php");

    session_start();
    verificaLogin();
?>

  <form class="" action="../requisicoesphp/buscar_usuario.php" method="post">
    <table>
      <tr>
        <td>Matricula do Aluno preterido</td>
        <td> <input type="text" name="matricula"> </td>
      </tr>
      <tr>
        <td> <input type="submit" name="enviar" value="Enviar"> </td>
      </tr>
    </table>
  </form>

<?php include("../padrao/rodape.php"); ?>
