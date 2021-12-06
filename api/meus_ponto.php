<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha folha de ponto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Ponto Y&Stevo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" href="meus_ponto.php">Meu ponto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="#">Status</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="logout.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    

    <table class="table table-warning">
        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Busce uma data especifica" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesquisar</button>
            </div>
        </form>
    <thead>
    <tr>
      <th scope="col">Dia</th>
      <th scope="col">Marcação</th>
      <th scope="col">Horário</th>
    </tr>
  </thead>


    <?php
        require_once 'php/conecta.php';
    
        $conexao = new Conn();
        session_start();
        $id =  $_SESSION['id'];

        $query = "SELECT id, id_user, dia, hora, tipo FROM ponto WHERE id_user ='$id' ORDER BY dia, hora";

        $busca = $conexao->getConn()->prepare($query);
        $busca->execute();
        
        while ($ponto = $busca->fetch(PDO::FETCH_ASSOC)){

        switch ($ponto['tipo']) {
            case 1:
                    echo "<tr>
                            <th scope='row'>$ponto[dia]</th>
                            <td>Entrada</td>
                            <td>$ponto[hora]</td>
                        </tr>";
               break;
            case 2:
                echo "<tr>
                        <th scope='row'>$ponto[dia]</th>
                        <td>Saída</td>
                        <td>$ponto[hora]</td>
                    </tr>";
               break;
            case 3:
                echo "<tr>
                        <th scope='row'>$ponto[dia]</th>
                        <td>Início do int.</td>
                        <td>$ponto[hora]</td>
                    </tr>";
               break;
           
            default:
            echo "<tr>
                    <th scope='row'>$ponto[dia]</th>
                    <td>Fim do int.</td>
                    <td>$ponto[hora]</td>
                </tr>";
               break;
        }
        
        
    }
        

    ?>
    </table>


    media trabalha por dia
</body>
</html>