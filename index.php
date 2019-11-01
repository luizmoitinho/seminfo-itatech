
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>SEMINFO 2019</title>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!--Link do css proprio-->
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rochester&display=swap" rel="stylesheet">

</head>

<body>

    <nav  id="header" class="navbar navbar-expand-lg bg-gradient">
        <a id="logo" class="nav" a href="index.php">
            <span>Seminfo</span>
        </a>
        <div  class="navbar-toggler" onclick="transformIcon()" data-toggle="collapse" data-target="#barra-navegacao" aria-controls="barra-navegacao" aria-expanded="false" aria-label="Alterna navegação">
              <span id="btn-menu">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
              </span>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="barra-navegacao">
            <ul class="nav navbar-nav">
                <li >
                    <a href="#eventos">Apoio</a>
                </li>
                <li >
                    <a href="#">Paletras</a>
                </li>
                <li >
                    <a  href="#">Eventos</a>
                </li>
                <li >
                    <a  href="#">Organizadores</a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="bg-black">
        <div class="container-fluid">
            <div class="row">
                <div id="painel-cronometro" class="bg-gradient" >
                    <div class="flex-column">
                        <span id="seminfo"> VEM AI A SEMINFO 2019</span>
                        <span id="slogan">Nos dias 11, 12 e 13 de Dezembro no Campus da UFS de Itabaiana</span>    
                        <hr class="bg-white">
                    </div>
                    <div id="cronometro" class="flex-row">
                        <div class="flex-column">
                            <span class="contorno-numeros" id="dias"> </span>
                            <span class="info">Dias</span>
                        </div>
                        <div class="flex-column">
                            <span class="contorno-numeros" id="horas"> </span>
                            <span class="info">Horas</span>
                        </div>
                        <span class="contorno-pontos">:</span>
                        <div class="flex-column">
                            <span class="contorno-numeros" id="min"></span>
                            <span class="info">Minutos</span>
                        </div>
                        <span class="contorno-pontos">:</span>
                        <div class="flex-column">
                            <span class="contorno-numeros">
                                <span id="seg"></span>
                            </span>
                            <span class="info">Segundos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="painel-eventos bg-gradient">
            <div class="container-fluid">
                <div class="row flex-row">
                    <div class="fundo-local flex-column">
                    <iframe class="local-maps"src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9879.486491068668!2d-37.43711892562412!3d-10.682208047209048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1572313589137!5m2!1spt-BR!2sbr" width="900" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="container-fluid">
                    <div class="row">
                        <div class="info-seminfo" id="eventos">
                            <span class="topico-seminfo">Eventos</span>
                        </div>
                        <div class="info-seminfo">
                             <span class="topico-seminfo">Palestrantes</span>
                        </div>
                        <div class="info-seminfo">
                            <span class="topico-seminfo">Apoio</span>
                        </div>          
                    </div>
                </div>
        </div>
    </main>
    <footer>
</footer>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/lib.js"></script>
</body>
</html>