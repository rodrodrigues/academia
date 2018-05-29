<?php include("../padrao/cabecalho.php");
         
?>

  <h1>Bem vindo a ppágina de login do administrador</h1>

  <form class="" action="../requisicoesphp/realizar_login_administrador.php" method="post">
    <table>
      <tr>
        <td>Matricula:</td>
        <td> <input type="number" name="matricula"> </td>
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
      <?php $_SESSION['MsgErro'];
            include("../requisicoesphp/funcoes.php");
            encerraSessao();
        ?>
  </p>
  </div>
<?php include("../padrao/rodape.php"); ?>
