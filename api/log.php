<?php
    require_once 'php/conecta.php';

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
        $pass = sha1($dados['senha']);
        $email = $dados['email'];
        
        $conexao = new Conn();

        $query = "SELECT id, nome, email, senha FROM users WHERE email ='$email' AND senha ='$pass'";

        $log = $conexao->getConn()->prepare($query);
        $log->execute();
        
        if ($nome = $log->fetch(PDO::FETCH_ASSOC)){
            session_start();
            $_SESSION['nome'] = $nome['nome'];
            $_SESSION['id'] = $nome['id'];

            echo "<script>alert('Válidado com sucesso'); location.href='index.php'</script>";
        }else{
            echo "<script>alert('Dados inválidos,tente novamente'); history.back();'</script>";
        }

?>