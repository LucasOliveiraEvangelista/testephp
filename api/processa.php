<?php
    require_once 'php/conecta.php';
    $conexao = new Conn();

    print_r($_POST);

    $dia = date("d/m/Y");
    $hora = date("H:i:s");
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

   switch ($dados['tipo']) {
        case 1:
                $query = "INSERT INTO ponto (id_user, dia, hora, tipo) 
                VALUES (:id_user, :dia, :hora, :tipo)";
                $marcar = $conexao->getConn()->prepare($query);
        
                $marcar->bindParam(':id_user', $dados['usuario'], PDO::PARAM_STR);
                $marcar->bindParam(':dia', $dia, PDO::PARAM_STR);
                $marcar->bindParam(':hora', $hora, PDO::PARAM_STR);
                $marcar->bindParam(':tipo', $dados["tipo"], PDO::PARAM_STR);
        
                $marcar->execute();
                
                if ($marcar->rowCount()){
                    echo "<script>alert('Dados inseridos com sucesso'); location.href='index.php'</script>";
                }else{
                    echo "<script>alert('Por favor tente novamente'); history.back();'</script>";
                }
           break;

        case 2:
                $query = "INSERT INTO ponto (id_user, dia, hora, tipo) 
                VALUES (:id_user, :dia, :hora, :tipo)";
                $marcar = $conexao->getConn()->prepare($query);
        
                $marcar->bindParam(':id_user', $dados['usuario'], PDO::PARAM_STR);
                $marcar->bindParam(':dia', $dia, PDO::PARAM_STR);
                $marcar->bindParam(':hora', $hora, PDO::PARAM_STR);
                $marcar->bindParam(':tipo', $dados["tipo"], PDO::PARAM_STR);
        
                $marcar->execute();
                
                if ($marcar->rowCount()){
                    echo "<script>alert('Dados inseridos com sucesso'); location.href='index.php'</script>";
                }else{
                    echo "<script>alert('Por favor tente novamente'); history.back();'</script>";
                }
            break;
            case 3:
                $query = "INSERT INTO ponto (id_user, dia, hora, tipo) 
                VALUES (:id_user, :dia, :hora, :tipo)";
                $marcar = $conexao->getConn()->prepare($query);
        
                $marcar->bindParam(':id_user', $dados['usuario'], PDO::PARAM_STR);
                $marcar->bindParam(':dia', $dia, PDO::PARAM_STR);
                $marcar->bindParam(':hora', $hora, PDO::PARAM_STR);
                $marcar->bindParam(':tipo', $dados["tipo"], PDO::PARAM_STR);
        
                $marcar->execute();
                
                if ($marcar->rowCount()){
                    echo "<script>alert('Dados inseridos com sucesso'); location.href='index.php'</script>";
                }else{
                    echo "<script>alert('Por favor tente novamente'); history.back();'</script>";
                }
            break;
            case 4:
                $query = "INSERT INTO ponto (id_user, dia, hora, tipo) 
                VALUES (:id_user, :dia, :hora, :tipo)";
                $marcar = $conexao->getConn()->prepare($query);
        
                $marcar->bindParam(':id_user', $dados['usuario'], PDO::PARAM_STR);
                $marcar->bindParam(':dia', $dia, PDO::PARAM_STR);
                $marcar->bindParam(':hora', $hora, PDO::PARAM_STR);
                $marcar->bindParam(':tipo', $dados["tipo"], PDO::PARAM_STR);
        
                $marcar->execute();
                
                if ($marcar->rowCount()){
                    echo "<script>alert('Dados inseridos com sucesso'); location.href='index.php'</script>";
                }else{
                    echo "<script>alert('Por favor tente novamente'); history.back();'</script>";
                }
            break;
       
        default:
            echo "<script>alert('Por favor tente novamente'); history.back();'</script>";
           break;
    }
?>