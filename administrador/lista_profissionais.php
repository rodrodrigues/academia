<?php

  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();

  $row = buscaPersonais();

  var_dump($row);

 ?>

 <h1>Profissionais</h1>

 <?php
  
  ?>

 <?php include("../padrao/rodape.php"); ?>
