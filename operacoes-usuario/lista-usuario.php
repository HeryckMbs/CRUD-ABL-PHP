

<?php

//query para pegar todos os CPFs
$result = mysqli_query($mysqli, "SELECT * FROM usuario ORDER BY CPF DESC");

$rows_table = $result->num_rows;
//impressão de tabela através do print
if ($rows_table > 0) {
    print "<div class=cont-tab>";
    print "<table id='tabela-apt1' class='table table-dark table hover table-striped table-bordered border-success'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>CPF </th>";
    print "<th>Nome </th>";
    print "<th>Telefone </th>";
    print "<th>Ação</th>";
    print "</tr>";
    $cont = 1;
    while ($row = $result->fetch_object()) { //irá retornar a linha atual do conjunto de resultados como um objeto aonde 
                                             //os atributos do objeto representam os nomes dos campos encontrados no conjunto de resultados
        print "<tr>";
        print "<td>" . $cont . "</td>";
        print "<td>" . $row->CPF . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->tel1 . "</td>";
        print "<td><button onclick=\"location.href='?page=editar&CPF=" . $row->CPF . "';\" type='button' class='btn btn-warning'>Editar</button> 

                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&CPF=" . $row->CPF . "';}else{false;} \" type='button' class='btn btn-danger'>Excluir</button></td>";

        print "</tr>";
        print "</div>";
        $cont++;
    }
    print "</table>";
} else {
    //validação de erro
    print "<script>alert('Não foram encontrados usuários cadastrados na base de dados')</script>";
    print "<script> location.href='?page=cadastro'; </script>";
}
?>
