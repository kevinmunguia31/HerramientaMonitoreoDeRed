
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herramienta de Red</title>
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
    <li class="nav-item">
        <a class="nav-link" href="/index.php"><img width="20px" src="https://img.icons8.com/color-glass/48/000000/home.png"/> Home</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img src="/img/nmap-logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Monitoreo con NMAP</b></h5>
                        <p class="card-text">Nmap es un programa de código abierto que sirve para efectuar rastreo de puertos escrito originalmente por Gordon Lyon (más conocido por su alias Fyodor Vaskovich​) y cuyo desarrollo se encuentra hoy a cargo de una comunidad. </p>
                        <a href="/nmap.php" class="btn btn-success">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img src="/img/ssh-logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Monitoreo con SSH</b></h5>
                        <p class="card-text">SSH (o Secure SHell) es el nombre de un protocolo y del programa que lo implementa cuya principal función es el acceso remoto a un servidor por medio de un canal seguro en el que toda la información está cifrada</p>
                        <a href="/ssh.php" class="btn btn-danger">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img src="/img/snmp3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Monitoreo con SNMP</b></h5>
                        <p class="card-text">El Protocolo simple de administración de red o SNMP (del inglés Simple Network Management Protocol) es un protocolo de la capa de aplicación que facilita el intercambio de información de administración entre dispositivos de red.</p>
                        <a href="/snmp.php" class="btn btn-warning">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img src="/img/logs.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> <b>Monitoreo de Logs</b></h5>
                        <p class="card-text">En informática, se usa el término registro, log o historial de log para referirse a la grabación secuencial en un archivo o en una base de datos de todos los acontecimientos (eventos o acciones) que afectan a un proceso particular (aplicación, actividad de una red informática, etc.) </p>
                        <a href="/logs.php" class="btn btn-info">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>