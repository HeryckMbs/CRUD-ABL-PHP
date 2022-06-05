<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>ABL PRIME</h1>
        <div class="menu">
            <a class="btnmenu" href="index.php">Menu Principal</a>
            <a class="btnmenu" href="apartamento.php">Apartamentos</a>
            <a class="btnmenu" href="proprietario.php">Proprietários</a>
        </div>
    </div>
    <h1 class="h1-pag">Você está no Menu <strong>Usuário</strong></h1>
    <div class="funcoes">
        <h2 style="color: white;">Escolha sua opção</h2>
        <a class="btn btn-outline-primary btn-lg" href="?page=cadastro">Cadastrar</a>
        <a class="btn btn-outline-success btn-lg" href="?page=listar">Listar</a>
    </div>

    <?php
    //inclui a operação escolhida pelo usuário e inclusão do arquivo de configuração do banco de Dados
    include_once("config.php");
    switch (@$_REQUEST["page"]) {
        case "cadastro":
            include("./operacoes-usuario/cadastro_user.php");
            break;
        case "editar":
            include("./operacoes-usuario/editar.php");
            break;
        case "listar":
            include("./operacoes-usuario/lista-usuario.php");
            break;
        case "salvar":
            include("./operacoes-usuario/salvar.php");
            break;
    }
    ?>
    <script src="./script.js"></script>

</body>

</html>
