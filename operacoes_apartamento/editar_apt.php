<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
  <?php
  //query para selecionar especificamente o apartamento escolhido pelo usuário para ser alterado
  $res = mysqli_query($mysqli, "SELECT * FROM apartamento WHERE Id_Apt=" . $_REQUEST["Id_Apt"]);
  $dados = $res->fetch_object();


  ?>

  <div class="dados">
    <form action="?page=salvar" method="POST">

      <h1>Editar Usuário</h1>
      <input type="hidden" name="acao" value="editar">
      <input type="hidden" value="<?php print $dados->Id_Apt; ?>" name="Id_Apt">
      <!-- Dados originais colocados nos inputs para que sejam alterados -->
      <input type="number" value="<?php print $dados->Id_Apt; ?>" name="Id_Apt" placeholder="Digite o ID apt">
      <input type="number" value="<?php print $dados->Id_bloco; ?>" name="Id_bloco" placeholder="Digite o ID do bloco">
      <input type="number" value="<?php print $dados->Num_andar; ?>" name="Num_andar" placeholder="Digite o n° do andar">
      <input type="number" value="<?php print $dados->Num_apt; ?>" name="Num_apt" placeholder="Digite o n° do apt">
      <!-- validação JS-->
      <button onclick="valida(2)" class="btnform" type="submit ">Finalizar Edição</button>
    </form>
  </div>
  <script src="../"></script>

</body>

</html>
