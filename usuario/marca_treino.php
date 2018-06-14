<?php
    include("../padrao/cabecalho.php");
    include("../requisicoesphp/funcoes.php");

    verificaLogin();
    include("../requisicoesphp/conexao.php");

    $matUser = $_SESSION['matricula'];

    $query = "SELECT * FROM treino WHERE id_usuario = '$matUser'";

    $checaTreino = mysqli_query($conexao, $query);
    if (mysqli_num_rows($checaTreino) > 0) {
        $row = mysqli_fetch_assoc($checaTreino);
        
        $rowPersonais = buscaPersonaisAT($row['id_admin']);

      ?>
        <h2>Você já tem um treino marcado</h2>

        <table>
          <tr>
              <td>Personal</td>
              <td>Data</td>
              <td>Hora</td>
              <td>Descricao</td>
          </tr>
          <tr>
            <td><?= $rowPersonais['nome']; ?></td>
            <td><?= $row['data']; ?></td>
            <td><?= $row['hora']; ?></td>
            <td><?= $row['descricao']; ?></td>
          </tr>
            <td> <a href="../requisicoesphp/cancelar_treino.php?id=<?= $row['id_usuario']; ?>">Cancelar Avaliação</a> </td>
          </tr>
        </table>

<?php
    } else {
    $row = buscaPersonais();
?>
  <form class="" action="../requisicoesphp/marcar_treino.php" method="post">
    <table>

      <?php
      $nomePersonal = $row['nome'];
      $matriculaPersonal = $row['matricula'];
      ?>
      <tr>
        <td>Personal: </td>
        <td>
      <select class="" name="idPersonal">
        <option value="<?= $matriculaPersonal ?>"><?= $nomePersonal ?></option>

      </select>
    </td>
        </tr>
      <tr>
          <td> Descrição: </td>
          <td> <textarea name="desc_treino" rows="8" cols="30"></textarea> </td>
      </tr>
      <tr>
          <td>Data: </td>
          <td><input type="date" name="data_treino"></td>
      </tr>
      <tr>
      <td>Hora:</td>
      <td> <select class="" name="hora_treino">
        <optgroup label="manhã">

          <option value="9h">9h</option>
          <option value="10h">10h</option>

        </optgroup>
        <optgroup label="tarde">
          <option value="15h30">15h30</option>
          <option value="17h">17h</option>
        </optgroup>
      </select> </td>
    </tr>

    <br>
      <tr>
        <td> <input type="submit" name="" value="Enviar"> </td>
      </tr>
    </table>
  </form>



<?php
}
include("../padrao/rodape.php"); ?>
