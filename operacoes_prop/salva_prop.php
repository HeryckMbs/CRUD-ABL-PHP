<?php
//utilizar variáveis globais aqui deram certo conflito então tive que coloca-las como locais
//cadastro de proprietários de cada apartamento
//manipulação real dos dados


switch (@$_REQUEST["acao"]) {
    case 'cadastrar':
        //inserção
        $Id_Apt = $_POST["Id_Apt"];
        $CPF_usu = $_POST["CPF_usu"];
        $Cod_contrato = $_POST["Cod_contrato"];

        $stmt = $mysqli->prepare("INSERT INTO usuario_apt (Id_Apt,CPF_usu,Cod_contrato) VALUES(?,?,?) ");
        $stmt->bind_param("iii", $Id_Apt, $CPF_usu, $Cod_contrato);
        $stmt->execute();
        //validação de erro
        if ($stmt == true) {
            print "<script> alert('Cadastro realizado com sucesso'); </script>";
        } else {
            print "<script> alert('Cadastro não realizado'); </script>";
        }

        break;

    case 'editar':
        //atualização de dados
        $Id_apt = $_POST["Id_apt"];
        $CPF_usu = $_POST["CPF_usu"];
        $Cod_contrato = $_POST["Cod_contrato"];

        $stmt = $mysqli->prepare("UPDATE usuario_apt SET CPF_usu=?, Id_apt=?, Cod_contrato=?  WHERE Cod_contrato=?");
        $stmt->bind_param("iiii", $CPF_usu, $Id_apt, $Cod_contrato, $Cod_contrato);
        $stmt->execute();
        //validação de erro
        if ($stmt == true) {
            print "<script> alert('Edição realizada'); </script>";

            print "<script> location.href='?page=listar'; </script>";
        } else {
            print "<script> alert('Edição não realizada'); </script>";
            print "<script> location.href='?page=listar'; </script>";
        }

        break;

    case "excluir":
        //exclusão de dados
        $Id_Apt = $_POST["Id_Apt"];
        $CPF_usu = $_POST["CPF_usu"];
        $Cod_contrato = $_POST["Cod_contrato"];
        $stmt = $mysqli->prepare("DELETE FROM usuario_apt WHERE Cod_contrato=?");
        $stmt->bind_param("i", $_REQUEST["Cod_contrato"]);
        $stmt->execute();
        //validação de erro
        if ($stmt == true) {
            print "<script> alert('Exclusão realizada'); </script>";

            print "<script> location.href='?page=listar'; </script>";
        } else {
            print "<script> alert('Exclusão não realizada'); </script>";
            print "<script> location.href='?page=listar'; </script>";
        }
        break;
}
