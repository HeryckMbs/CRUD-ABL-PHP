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
      <h1>Novo Usuário</h1>
      <!-- Envio da ação -->
      <input type="hidden" name="acao" value="cadastrar">
      <!-- Inserção dos Dados no Input -->
      <input id="cpf" type="number" name="CPF" placeholder="Digite seu CPF sem . e -">
      <input id="nome" type="text" name="nome" placeholder="Nome">
      <input id="tel" type="tel" name="tel1" placeholder="Telefone 1">
      
      <!-- Validação com JS -->
      <button id="prop" onclick="validar(1)" class="btnform" type="submit ">Finalizar Cadastro</button>
      <script src="../script.js"></script>

    </form>
  </div>

</body>

</html>
