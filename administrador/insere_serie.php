<?php
    include("../padrao/cabecalho.php");
    include("../requisicoesphp/funcoes.php");

    verificaLogin();
?>
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
        <td> <input type="submit" name="enviar" value="Cadastrar série"> </td>
      </tr>
</table>
</form>

<?php include("../padrao/rodape.php"); ?>
