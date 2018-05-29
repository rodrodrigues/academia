<?php
    include("../padrao/cabecalho.php");
    include("../requisicoesphp/funcoes.php");

    session_start();
    verificaLogin();
?>
  <form class="" action="../requisicoesphp/alterar_dados_de_usuario.php" method="post">
    <table>
      <tr>
          <td>Nome: </td>
          <td><input type="text" name="nome_novo_usuario"></td>
      </tr>
      <tr>
          <td>Email para contato: </td>
          <td><input type="text" name="email_novo_usuario" value=""></td>
      </tr>
      <tr>
          <td>Peso: </td>
          <td><input type="text" name="peso_novo_usuario"></td>
      </tr>
      <tr>
          <td>Altura: </td>
          <td><input type="text" name="altura_novo_usuario"></td>
      </tr>
      <tr>
        <td> <input type="submit" name="" value="Enviar"> </td>
      </tr>
    </table>
  </form>

<?php include("../padrao/rodape.php"); ?>
