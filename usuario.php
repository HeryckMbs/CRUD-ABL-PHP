<?php
require_once('head.php');

?>
<!doctype html>
<html lang="pt-br">

<head>
   <?php
   $head = new Head();
   $head->setHead();
   ?>
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
