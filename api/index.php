<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Ponto || trial</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- lembrar de tirar isso -->
    <meta http-equiv="refresh" content="5" />
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
    <div class="card text-center">
        <div class="card-header">
            <?php
            require_once 'php/conecta.php';
                session_start();
                echo $_SESSION['nome'];

               $id =  $_SESSION['id'] ;
            ?>
        </div>     
            <div class="card-group">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card" style="border: transparent;">
                                <div class="card-body">
                                    <h5 class="card-title">Marcar Entrada</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <form action="processa.php" method="post">
                                        <?php
                                        
                                        echo "<input type='hidden' value='$id' name='usuario'>";

                                        ?>
                                        <input type="checkbox"  style="visibility: hidden;" name="tipo" checked value="1">
                                        <input type="submit" class="btn btn-success" value="Entrada">

                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card"style="border: transparent;">
                                <div class="card-body">
                                    <h5 class="card-title">Marcar Saída</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <form action="processa.php" method="post">
                                        <?php
                                        
                                        echo "<input type='hidden' value='$id' name='usuario'>";

                                        ?>
                                        <input type="checkbox"  style="visibility: hidden;" name="tipo" checked value="2">
                                        <input type="submit" class="btn btn-danger" value="Saída">

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <div class="row" >
                        <div class="col-sm-6">
                            <div class="card"style="border: transparent;">
                                <div class="card-body">
                                    <h5 class="card-title">Marcar inicio de intervalo</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <form action="processa.php" method="post">
                                        <?php
                                        
                                        echo "<input type='hidden' value='$id' name='usuario'>";

                                        ?>
                                        <input type="checkbox"  style="visibility: hidden;" name="tipo" checked value="3">
                                        <input type="submit" class="btn btn-info" value="Inicio do Intervalo">

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card"style="border: transparent;">
                                <div class="card-body">
                                    <h5 class="card-title">Marcar fim do intervalo</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <form action="processa.php" method="post">
                                        <?php
                                        
                                        echo "<input type='hidden' value='$id' name='usuario'>";

                                        ?>
                                        <input type="checkbox"  style="visibility: hidden;" name="tipo" checked value="4">
                                        <input type="submit" class="btn btn-info" value="Fim do Intervalo">

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>