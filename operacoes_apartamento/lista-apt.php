

<?php

//query para selecionar todos os apartamentos cadastrados
$result = mysqli_query($mysqli, "SELECT * FROM apartamento ORDER BY Id_Apt DESC");

$rows_table = $result->num_rows;
//impressão da tabela através do print"";
if ($rows_table > 0) {
    print "<div class=cont-tab>";
    print "<table id='tabela-apt' class='table table-dark table hover table-striped table-bordered border-success'>";

    print "<tr>";
    print "<th>ID Apartamento</th>";
    print "<th>Andar</th>";
    print "<th>N° Apt</th>";
    print "<th>Bloco</th>";
    print "<th>Ação</th>";
    print "</tr>";
    while ($row = $result->fetch_object()) { //irá retornar a linha atual do conjunto de resultados 
                                             //como um objeto aonde os atributos do objeto representam os nomes dos campos encontrados no conjunto de resultados. 
        print "<tr>";
        print "<td>" . $row->Id_Apt . "</td>";
        print "<td>" . $row->Num_andar . "</td>";
        print "<td>" . $row->Num_apt . "</td>";
        print "<td>" . $row->Id_bloco . "</td>";
        //botão para selecionar a ação de edição ou exclusão e o envio dos parâmetros necessários para a operação 
        print "<td><button onclick=\"location.href='?page=editar&Id_Apt=" . $row->Id_Apt . "';\" type='button' class='btn btn-warning'>Editar</button> 

            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&Id_Apt=" . $row->Id_Apt . "';}else{false;} \" type='button' class='btn btn-danger'>Excluir</button></td>";


        print "</tr>";
    }
    print "</table>";
    print "</div>";
} else {
    print "<script>alert('Não foram encontrados usuários cadastrados na base de dados')</script>";
    print "<script> location.href='?page=cadastro'; </script>";
}
?>
