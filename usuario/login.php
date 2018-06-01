<?php include("../padrao/cabecalho.php");
      include("../requisicoesphp/conexao.php");
      include("../requisicoesphp/funcoes.php");


?>

  <h1>Bem vindo a página de login do usuario</h1>

  <form class="" action="../requisicoesphp/realizar_login_usuario.php" method="post">
    <table>
      <tr>
        <td>Email:</td>
        <td> <input type="text" name="email"> </td>
      </tr>
      <tr>
        <td>Senha: </td>
        <td> <input type="password" name="senha"> </td>
      </tr>
      <tr>
        <td> <input type="submit" name="enviar" value="Logar"> </td>
      </tr>
    </table>
  </form>
  <div class="">
    <p>
      <?= $_SESSION['msguser'] ?>
    </p>
  </div>
<?php include("../padrao/rodape.php"); ?>
