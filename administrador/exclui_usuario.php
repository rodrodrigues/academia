<?php
<<<<<<< Updated upstream
  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();

 ?>
<h1>Você está excluindo o usuário de matrícula : <?= $_SESSION['matuser'] ?></h1>
<h2> Nome: <?= $_SESSION['nomuser'] ?></h2>
<h2> Telefone: <?= $_SESSION['teluser'] ?></h2>
<h2> Email: <?= $_SESSION['emailuser'] ?></h2>
<h2> Endereço: <?= $_SESSION['endeuser'] ?></h2>
 <form action="../requisicoesphp/excluir_usuario.php" method="POST">
     <table>
       <tr>
           <td><input type="submit" name="enviar" value="excluir"></td>
           <td><a href="dados_de_usuario.php" class="btn btn-default">Cancelar</a></td>
       </tr>
     </table>
     </form>

 <?php include("../padrao/rodape.php"); ?>
=======
    include("../padrao/cabecalho.php");
    include("../requisicoesphp/funcoes.php");

    verificaLogin();
?>

<p>Você tem certeza que deseja excluir a senha de <?= $_SESSION['nomeuser']; ?></p>

<form class="" action="../requisicoesphp/excluir_usuario.php" method="post">

    <table>
      <tr>
        <td>Confirme sua senha: </td>
        <td> <input type="password" name="senha_admin" value=""> </td>
      </tr>
      <tr>
        <td> <input type="submit" name="confirmar" value="Confirmar"> </td>
      </tr>
    </table>
</form>

<?php include("../padrao/rodape.php"); ?>
>>>>>>> Stashed changes
