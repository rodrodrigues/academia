<?php
    include("../padrao/cabecalho.php");
    include("../requisicoesphp/funcoes.php");

    verificaLogin();

    include("../requisicoesphp/conexao.php");

    $id_usuario = $_SESSION['matuser'];

    $resultado = mysqli_query($conexao, "SELECT * FROM serie WHERE mat_usuario = '$id_usuario'");

      $a = mysqli_num_rows($resultado);

    if ($a > 0) {
?>
  <h2>Atualizar Série</h2>
  <form class="" action="../requisicoesphp/atualizar_serie.php" method="post">
    <table>
      <tr>
        <td> <label for=""> Exercicio </label> </td>
        <td> <label for=""> Repetições </label> </td>
        <td> <label for=""> Quantidade </label> </td>
      </tr>
      <tr>
          <td><input type="text" name="ex1"></td>
          <td><input type="text" name="rep1"></td>
          <td><input type="text" name="qtd1"></td>
      </tr>
      <tr>
          <td><input type="text" name="ex2"></td>
          <td><input type="text" name="rep2"></td>
          <td><input type="text" name="qtd2"></td>
      </tr>
      <tr>
          <td><input type="text" name="ex3"></td>
          <td><input type="text" name="rep3"></td>
          <td><input type="text" name="qtd3"></td>
      </tr>
      <tr>
          <td><input type="text" name="ex4"></td>
          <td><input type="text" name="rep4"></td>
          <td><input type="text" name="qtd4"></td>
      </tr>
        <tr>
            <td><input type="text" name="ex5"></td>
            <td><input type="text" name="rep5"></td>
            <td><input type="text" name="qtd5"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex6"></td>
            <td><input type="text" name="rep6"></td>
            <td><input type="text" name="qtd6"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex7"></td>
            <td><input type="text" name="rep7"></td>
            <td><input type="text" name="qtd7"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex8"></td>
            <td><input type="text" name="rep8"></td>
            <td><input type="text" name="qtd8"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex9"></td>
            <td><input type="text" name="rep9"></td>
            <td><input type="text" name="qtd9"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex10"></td>
            <td><input type="text" name="rep10"></td>
            <td><input type="text" name="qtd10"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex11"></td>
            <td><input type="text" name="rep11"></td>
            <td><input type="text" name="qtd11"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex12"></td>
            <td><input type="text" name="rep12"></td>
            <td><input type="text" name="qtd12"></td>
        </tr>
        <tr>
            <td><h3>Observação</h3></td>
            <td><textarea rows="6" cols="20" name="observacao"></textarea></td>
        </tr>
      <tr>
        <td> <input type="submit" name="enviar" value="Cadastrar série"> </td>
      </tr>
</table>
</form>

<?php } else { ?>
  <h2>Inserir Série</h2>
  <form class="" action="../requisicoesphp/inserir_serie.php" method="post">
    <table>
      <tr>
        <td> <label for=""> Exercicio </label> </td>
        <td> <label for=""> Repetições </label> </td>
        <td> <label for=""> Quantidade </label> </td>
      </tr>
      <tr>
          <td><input type="text" name="ex1"></td>
          <td><input type="text" name="rep1"></td>
          <td><input type="text" name="qtd1"></td>
      </tr>
      <tr>
          <td><input type="text" name="ex2"></td>
          <td><input type="text" name="rep2"></td>
          <td><input type="text" name="qtd2"></td>
      </tr>
      <tr>
          <td><input type="text" name="ex3"></td>
          <td><input type="text" name="rep3"></td>
          <td><input type="text" name="qtd3"></td>
      </tr>
      <tr>
          <td><input type="text" name="ex4"></td>
          <td><input type="text" name="rep4"></td>
          <td><input type="text" name="qtd4"></td>
      </tr>
        <tr>
            <td><input type="text" name="ex5"></td>
            <td><input type="text" name="rep5"></td>
            <td><input type="text" name="qtd5"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex6"></td>
            <td><input type="text" name="rep6"></td>
            <td><input type="text" name="qtd6"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex7"></td>
            <td><input type="text" name="rep7"></td>
            <td><input type="text" name="qtd7"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex8"></td>
            <td><input type="text" name="rep8"></td>
            <td><input type="text" name="qtd8"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex9"></td>
            <td><input type="text" name="rep9"></td>
            <td><input type="text" name="qtd9"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex10"></td>
            <td><input type="text" name="rep10"></td>
            <td><input type="text" name="qtd10"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex11"></td>
            <td><input type="text" name="rep11"></td>
            <td><input type="text" name="qtd11"></td>
        </tr>
        <tr>
            <td><input type="text" name="ex12"></td>
            <td><input type="text" name="rep12"></td>
            <td><input type="text" name="qtd12"></td>
        </tr>
        <tr>
            <td><h3>Observação</h3></td>
            <td><textarea rows="6" cols="20" name="observacao"></textarea></td>
        </tr>
      <tr>
        <td> <input type="submit" name="enviar" value="Cadastrar série"> </td>
      </tr>
</table>
</form>

<?php } ?>

<?php include("../padrao/rodape.php"); ?>
