<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="dados">

    <form name="formuser" action="?page=salvar" method="POST">
      <h1>Novo Apartamento</h1>

      <input type="hidden" name="acao" value="cadastrar">
      <!-- Input para a inserção de dados na tabela Apartamento -->
      <input type="number" id="Id_Apt" name="Id_Apt" placeholder="Digite o ID do apt">
      <input type="number" id="Num_andar " name="Num_andar" placeholder="Digite o n° do andar">
      <input type="number" id="Num_apt" name="Num_apt" placeholder="Digite o n° do apt">
      <input type="number" id="Id_bloco" name="Id_bloco" placeholder="Digite o ID do bloco">
      <!-- validação com JS -->
      <button onclick="valida_apt(2)" class="btnform" type="submit ">Finalizar Cadastro</button>
      <br>
    </form>
  </div>

</body>

</html>
