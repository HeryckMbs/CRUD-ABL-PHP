<?php
//variaveis globais
  $CPF = $_POST["CPF"];
  $nome = $_POST["nome"];
  $tel1 = $_POST["tel1"];
switch(@$_REQUEST["acao"]){
    //aqui serão executadas as manipulações de dados diretamente na tabela
  case 'cadastrar':
    //Inserção de dados na tabela Usuário
        $stmt = $mysqli->prepare("INSERT INTO usuario (CPF,nome,tel1) VALUES(?, ?, ?) ");
        $stmt->bind_param("isi", $CPF,$nome, $tel1);
        $stmt->execute();

    //validação de erro
        if($stmt == true){
            print "<script> alert('Cadastro realizado com sucesso'); </script>";
            print "<script> location.href='?page=listar'; </script>";
        }else{
            print "<script> alert('Cadastro não realizado'); </script>";
            print "<script> location.href='?page=listar'; </script>";
        }
    break;
    
    case 'editar':
    //atualização de dados na tabela usuário
        $stmt = $mysqli->prepare("UPDATE usuario SET CPF=?, nome=?, tel1=? WHERE CPF=?");
        $stmt->bind_param("isii",$CPF,$nome,$tel1,$CPF);
        $stmt->execute();
                if($stmt == true){
                    print "<script> alert('Edição realizada com sucesso'); </script>";
                    print "<script> location.href='?page=listar'; </script>";
                }else{
                    print "<script> alert('Edição não realizada'); </script>";
                    print "<script> location.href='?page=listar'; </script>";
                }
    break;

    case 'excluir':
    //exclusão de dados na tabela usuário
                $stmt = $mysqli->prepare("DELETE FROM usuario WHERE CPF=?");
                $stmt->bind_param("i", $_REQUEST["CPF"]);
                $stmt->execute();     
                
                if($stmt == true){
                    print "<script> location.href='?page=listar'; </script>";
                }else{
                    print "<script> alert('Exclusão não realizada'); </script>";
                    print "<script> location.href='?page=listar'; </script>";
                }
                break;
            
        }
