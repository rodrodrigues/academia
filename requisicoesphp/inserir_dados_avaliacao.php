<?php

include("conexao.php");
include("funcoes.php");

    $id_usuario = $_SESSION['matuser'];

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $cirBraco = $_POST['cirBraco'];
    $cirPeito = $_POST['cirPeito'];
    $cirCintura = $_POST['cirCintura'];
    $cirCoxa = $_POST['cirCoxa'];
    $cirPanturrilha = $_POST['cirPanturrilha'];

    
