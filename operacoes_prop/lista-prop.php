

<?php
//Inner join para juntar a tabela usuario e usuario_apt, que resultará numa tabela que relaciona os apartamentos de um usuário 
$result = mysqli_query($mysqli, "SELECT * FROM usuario_apt INNER JOIN usuario WHERE CPF=CPF_usu");
$rows_table = $result->num_rows;


//impressão dos apartamentos de todos os usuários
if ($rows_table > 0) {
    print "<h2> Lista de Proprietários</h2>";
    print "<div class=cont-tab>";

    print "<table id='tabela-apt2' class='table table-dark table hover table-striped table-bordered border-success'>";

    print "<tr>";
    print "<th>#</th>";
    print "<th>CPF</th>";
    print "<th>Nome</th>";
    print "<th>ID apartamento</th>";
    print "<th>Código do contrato</th>";
    print "<th>Ação</th>";
    print "</tr>";
    $cont = 1;
    while ($row = $result->fetch_object()) {
        print "<tr>";
        print "<td>" . $cont . "</td>";
        print "<td>" . $row->CPF_usu . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->Id_apt . "</td>";
        print "<td>" . $row->Cod_contrato . "</td>";
        print "<td><button onclick=\"location.href='?page=editar&Cod_contrato=" . $row->Cod_contrato . "';\" type='button' class='btn btn-warning'>Editar Contrato</button>

            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&Cod_contrato=" . $row->Cod_contrato . "';}else{false;} \" type='button' class='btn btn-danger'>Excluir</button></td>";
        print "</tr>";
        $cont++;
    }
    print "</table>";
    print "</div>";
} else {
    print "<script>alert('Não foram encontrados usuários cadastrados na base de dados')</script>";
    print "<script> location.href='?page=cadastro'; </script>";
}


// todos os apartamentos
$result_apt = mysqli_query($mysqli, "SELECT * FROM apartamento ORDER BY Id_Apt DESC");
$rows_usu = $result_apt->num_rows;

print "<h2>Tabela de Apartamentos Cadastrados</h2>";
//impressão da tabela apartamentos para tornar a consulta mais evidente e fácil de ser compreendida
if ($rows_table > 0) {
    print "<div class=cont-tab>";
    print "<table id='tabela-apt' class='table table-dark table hover table-striped table-bordered border-success'>";

    print "<tr>";
    print "<th>ID Apartamento</th>";
    print "<th>Andar</th>";
    print "<th>N° Apt</th>";
    print "<th>Bloco</th>";
    print "</tr>";
    while ($row = $result_apt->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->Id_Apt . "</td>";
        print "<td>" . $row->Num_andar . "</td>";
        print "<td>" . $row->Num_apt . "</td>";
        print "<td>" . $row->Id_bloco . "</td>";

        print "</tr>";
    }
    print "</table>";
    print "</div>";
} else {
    print "<script>alert('Não foram encontrados usuários cadastrados na base de dados')</script>";
    print "<script> location.href='?page=cadastro'; </script>";
}

?>
