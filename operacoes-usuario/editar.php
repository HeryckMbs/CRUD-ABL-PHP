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
  // Execução da query e atribuição da linha da tabela na variável $res
  $res = mysqli_query($mysqli, "SELECT * FROM usuario WHERE CPF=" . $_REQUEST["CPF"]);
  $dados = $res->fetch_object();
  ?>


  <div class="dados">

    <form action="?page=salvar" method="POST">

      <h1>Editar Usuário</h1>
      <input type="hidden" name="acao" value="editar">
      <!-- Envio do CPF para a ação editar setar os novos dados relacionados ao cpf escolhido -->
      <input type="hidden" value="<?php print $dados->CPF; ?>" name="CPF">
      <!-- Inputs preenchidos com os valores já cadastrados prontos para serem alterados -->
      <input type="number" name="CPF" value="<?php print $dados->CPF; ?>" placeholder="Digite seu CPF sem . e -">
      <input type="text" value="<?php print $dados->nome; ?>" name="nome" placeholder="Nome">
      <input type="tel" value="<?php print $dados->tel1; ?>" name="tel1" placeholder="Telefone 1">
      
      <!-- Validação com JS -->
      <button onclick="valida(1)" class="btnform" type="submit ">Finalizar Edição</button>
    </form>
  </div>
  <script src="../script.js"></script>
</body>

</html>
