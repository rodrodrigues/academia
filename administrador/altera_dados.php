<?php
    include("../padrao/cabecalho.php");
    include("../requisicoesphp/funcoes.php");

    verificaLogin();
?>
  <form class="" action="../requisicoesphp/alterar_dados_de_usuario.php" method="post">
    <table>
      <tr>
          <td>Nome: </td>
          <td><input type="text" name="attnome"></td>
      </tr>
      <tr>
          <td>Email para contato: </td>
          <td><input type="text" name="attemail" value=""></td>
      </tr>
      <tr>
          <td>Peso: </td>
          <td><input type="text" name="attpeso"></td>
      </tr>
      <tr>
          <td>Altura: </td>
          <td><input type="text" name="attaltura"></td>
      </tr>
      <tr>
        <td> <input type="submit" name="" value="Enviar"> </td>
      </tr>
    </table>
  </form>

<?php include("../padrao/rodape.php"); ?>
