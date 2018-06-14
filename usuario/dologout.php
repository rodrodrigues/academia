<?php
include("../padrao/cabecalho.php");
include("../requisicoesphp/funcoes.php");

verificaLogin();
verificaBloqueio();
if(isset($_SESSION['matricula'])){
    session_destroy();
    header("Location:../index.php");
}
?>
