<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="../style.css">
  <style>

  </style>
</head>

<body>
  <form name="formuser" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <h2>Selecione o ID do apartamento</h2>
<!-- select usuado para listar os apartamentos cadastrados -->
    <select class="selectform" name="Id_Apt">
      <?php
      $result = mysqli_query($mysqli, "SELECT * FROM apartamento ORDER BY Id_Apt");
      $rows_table = $result->num_rows;
      while ($row = $result->fetch_object()) { ?>
      <!-- Impressão dos usuários apartamentos nas opções com o while -->
        <option id="idapt" name="Id_apt" value="<?php print $row->Id_Apt; ?>"><?php print $row->Id_Apt; ?></option>" ;
      <?php } ?>
    </select>
    <h2>Selecione o CPF do morador</h2>
    
    <!-- select usuado para listar os usuarios cadastrados -->
    <select class="selectform" name="CPF_usu">
      <?php
      $result = mysqli_query($mysqli, "SELECT * FROM usuario ORDER BY CPF");
      $rows_table = $result->num_rows;

      while ($row = $result->fetch_object()) { ?>
      <!-- Impressão dos usuários cadastrados nas opções com o while -->
        <option id="cpf" name="CPF_usu" value="<?php print $row->CPF; ?>"> <?php print $row->CPF; ?></option>" ;
      <?php } ?>
    </select>
    <!-- input para enviar o código do contrato -->
    <input id="inputp" type="number" name="Cod_contrato" placeholder="Digite o n° do contrato">

    <button onclick="valida(3)" class="btnform" type="submit ">Finalizar Cadastro</button>
  </form>
  <script src="../script.js"></script>

</body>

</html>
