<?php
    $Id_bloco = $_POST["Id_bloco"];
    $Num_andar = $_POST["Num_andar"];
    $Num_apt = $_POST["Num_apt"];
    $Id_Apt = $_POST["Id_Apt"];
    switch(@$_REQUEST["acao"]){
    
    case 'cadastrar':

        $stmt = $mysqli->prepare("INSERT INTO apartamento (Id_Apt,Num_andar,Num_apt,Id_Bloco) VALUES(?, ?, ?, ?) ");
        $stmt->bind_param("iiii", $Id_Apt,$Num_andar,$Num_apt,$Id_bloco);
        $stmt->execute();

        if($stmt == true){
            print "<script> alert('Cadastro realizado com sucesso'); </script>";
            print "<script> location.href='?page=listar'; </script>";
        }else{
            print "<script> alert('Cadastro não realizado'); </script>";
            print "<script> location.href='?page=listar'; </script>";
        }
        
    break;
    
    case 'editar':
    
        $stmt = $mysqli->prepare("UPDATE apartamento SET Id_Apt=?,  Num_andar=?, Num_apt=?,Id_bloco=? WHERE Id_Apt=?");
        $stmt->bind_param("iiiii",  $Id_Apt,$Num_andar,$Num_apt,$Id_bloco, $Id_Apt,);
        $stmt->execute();

        if($stmt == true){
            print "<script> alert('Edição realizada'); </script>";

            print "<script> location.href='?page=listar'; </script>";
        }else{
            print "<script> alert('Edição não realizada'); </script>";
            print "<script> location.href='?page=listar'; </script>";
        }
    
    break;
        
    case 'excluir':

                $stmt = $mysqli->prepare("DELETE FROM apartamento WHERE Id_Apt=?");
                $stmt->bind_param("i", $_REQUEST["Id_Apt"]);
                $stmt->execute();     
                if($stmt == true){
                    print "<script> alert('Exclusão realizada'); </script>";

                    print "<script> location.href='?page=listar'; </script>";
                }else{
                    print "<script> alert('Exclusão não realizada'); </script>";
                    print "<script> location.href='?page=listar'; </script>";
                }
                break;
                
    }
