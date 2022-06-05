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
            <a class="btnmenu" href="usuario.php">Usuarios</a>
            <a class="btnmenu" href="proprietario.php">Proprietários</a>
        </div>
    </div>
    <h1 class="h1-pag">Você está no Menu <strong>Apartamento</strong></h1>

    <div class="funcoes">
        <h2 style="color: white;">Escolha sua opção</h2>

        <a class="btn btn-outline-primary btn-lg" href="?page=cadastro">Cadastrar</a>
        <a class="btn btn-outline-success btn-lg" href="?page=listar">Listar</a>
    </div>
    <?php
    //inclusão da operação selecionada pelo usuário
    include_once("config.php");
    switch (@$_REQUEST["page"]) {
        case "cadastro":
            include("./operacoes_apartamento/cadastro_apt.php");
            break;
        case "editar":
            include("./operacoes_apartamento/editar_apt.php");
            break;
        case "listar":
            include("./operacoes_apartamento/lista-apt.php");
            break;
        case "salvar":
            include("./operacoes_apartamento/salva_apt.php");
            break;
    }
    ?>
    <script src="./script.js"></script>
</body>

</html>
