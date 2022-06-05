<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="style.css">
</head>


<body>
  <?php
  // através da query seleciona o elemento a ser editado
  $result = mysqli_query($mysqli, "SELECT * FROM usuario_apt WHERE Cod_contrato=" . $_REQUEST["Cod_contrato"]);
  $dados = $result->fetch_object();
  ?>
  <div class="dados">
    <form action="?page=salvar" method="POST">

      <input type="hidden" name="acao" value="editar">
      // valor da chave primária do elemento a ser editado
      <input type="hidden" value="<?php print $dados->Cod_contrato; ?>" name="Cod_contrato">
      <h3>Você está alterando o contrato<br><strong> <?php print $dados->Cod_contrato; ?></strong></h3>

      <h3>Selecione o ID do apartamento</h3>
    <!-- impressão dos dados nas options do select através do php-->
      <select class="selectform" name="Id_apt">
        <?php
        $result = mysqli_query($mysqli, "SELECT * FROM apartamento ORDER BY Id_Apt");
        $dados = $result->fetch_object();

        while ($row = $result->fetch_object()) { ?>
          <option name="Id_apt" value="<?php print $row->Id_Apt; ?>"><?php print $row->Id_Apt; ?></option>" ;
        <?php } ?>
      </select>
      <h3>Selecione o CPF do morador</h3>
      <select class="selectform" name="CPF_usu">
        <?php
        $result = mysqli_query($mysqli, "SELECT * FROM usuario ORDER BY CPF");
        $rows_table = $result->num_rows;

        while ($row = $result->fetch_object()) { ?>
          <option name="CPF_usu" value="<?php print $row->CPF; ?>"> <?php print $row->CPF; ?></option>" ;
        <?php } ?>
      </select>

<!-- validação JS-->
      <button onclick="valida(3)" class="btnform" type="submit ">Finalizar Edição</button>
      <br>
    </form>
  </div>

</body>

</html>
