<?php
    include("../padrao/cabecalho.php");
    include("../requisicoesphp/funcoes.php");

    verificaLogin();

?>

<form action="../requisicoesphp/cadastrar_novo_usuario.php" method="POST">
    <table>
        <tr>
            <td>Nome: </td>
            <td><input type="text" name="nome_novo_usuario"></td>
        </tr>
        <tr>
            <td>Telefone para contato: </td>
            <td><input type="text" name="telefone_novo_usuario"></td>
        </tr>
        <tr>
            <td>Email para contato: </td>
            <td><input type="text" name="email_novo_usuario"></td>
        </tr>
        <tr>
            <td>Endereço: </td>
            <td><input type="text" name="endereco_novo_usuario"></td>
        </tr>
        <tr>
            <td>Senha: </td>
            <td><input type="password" name="senha_novo_usuario"></td>
        </tr>
        <tr>
            <td><input type="submit" name="enviar" value="Cadastrar"></td>
        </tr>

    </table>
</form>

<?php include("../padrao/rodape.php"); ?>
