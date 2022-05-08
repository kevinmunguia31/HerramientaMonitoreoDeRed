<?php
    //$comando = './script.sh';
    $ip = $_POST['txtIp'];
    
    $comando = 'nmap ';

    $sentencia = $comando . $ip;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoreo con NMAP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Herramienta de Monitorio de Red</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Practica 05 Administración de Redes II</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/index.php"><img width="20px" src="https://img.icons8.com/color-glass/48/000000/home.png"/> Home</a>
        </li>
        
        </ul>
    </div>
    </nav>

    <div class="container mt-4">
        <form action="/nmap.php" method="post" name="formulario">
            <label for="">Introduzca la IP</label>
            <input type="text" name="txtIp" id="">
            <button type="submit" class="btn btn-success">Monitorizar</button>
        </form>
    </div>

    <div class="container mt-4">
        <?php
            echo "<h6>Monitorio de la Ip " . $ip . "</h6>";
            echo "<pre style='background: #000000; color: #00FF40; padding:5px; border-radius:10px;'>";
            echo shell_exec($sentencia);
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>