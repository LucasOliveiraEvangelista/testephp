<?php
    require_once 'php/conecta.php';

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    print_r($dados);
    if (isset($dados['enviar'])){

      
        $pass = sha1($dados['senha']);
        
        $conexao = new Conn();

        $query = "INSERT INTO users (nome, email, senha) 
        VALUES (:nome, :email, :senha)";
        $cadastrar = $conexao->getConn()->prepare($query);

        $cadastrar->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
        $cadastrar->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $cadastrar->bindParam(':senha', $pass, PDO::PARAM_STR);

        $cadastrar->execute();
        
        if ($cadastrar->rowCount()){
            session_start();
            $_SESSION['user'] = $user;
            $_SESSION['nome'] = $dados['nome'];

            echo "<script>alert('Dados inseridos com sucesso'); location.href='index.php'</script>";
        }else{
            echo "<script>alert('Por favor tente novamente'); history.back();'</script>";
        }
    }
?>