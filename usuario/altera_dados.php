<?php
    include("../padrao/cabecalho.php");
    include("../requisicoesphp/funcoes.php");

    verificaLogin();
?>
  <form class="" action="../requisicoesphp/alterar_dados_de_usuario_pelo_usuario.php" method="post">
    <table>
      <tr>
          <td>Email para contato: </td>
          <td><input type="text" name="attemail" value=""></td>
      </tr>
      <tr>
          <td>Senha: </td>
          <td><input type="password" name="attsenha"></td>
      </tr>
      <tr>
        <td> <input type="submit" name="" value="Enviar"> </td>
      </tr>
    </table>
  </form>

<?php include("../padrao/rodape.php"); ?>
