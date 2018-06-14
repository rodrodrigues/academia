<?php

  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();

  $row = buscaPersonais();

  var_dump($row);

 ?>

 <h1>Profissionais</h1>

<table class="table table-striped table-bordered">

<?php
foreach($row as $row) {
?>

    <tr>
        <td><?= $row['nome'] ?></td>
    </tr>

<?php
}
?>
</table>

 <?php include("../padrao/rodape.php"); ?>
