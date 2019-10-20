<?php 
    require_once('funcoes.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>SEMINFO - ItatechJr</title>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!--Link do css proprio-->
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <header id="cabecalho" class="navbar navbar-extend-lg">
        <div id="logo" class="nav justify-content-start">
            <span>Itatech <span id="jr">JR</span></span>
        </div>
        <nav id="barra-navegacao" class="navbar- justify-content-end">
            <span class="nav-item">
                <a href="">COLABORADORES</a>
            </span>
            <span class="nav-item">
                <a href="">PALESTRAS</a>
            </span>
            <span class="nav-item">
                <a href="">DATAS</a>
            </span>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div id="painel-entrada">
                    <div class="flex-column">
                        <span id="seminfo">SEMINFO 2019</span>
                        <span id="slogan">Nos dias 2, 3 e 4 de Dezembro no Campus da UFS de Itabaiana</span>    
                    </div>
                    <div id="cronometro" class="flex-row">
                        <div class="flex-column">
                            <span class="formato"> <?php echo diasRestantes();?></span>
                            <span class="info">Dias</span>
                        </div>
                        <div class="flex-column">
                            <span class="formato"> <?php echo horasRestantes();?></span>
                            <span class="info">Horas</span>
                        </div>
                        <span class="formato-pontos">:</span>
                        <div class="flex-column">
                            <span class="formato"><?php  echo minRestantes();?></span>
                            <span class="info">Minutos</span>
                        </div>
                        <span class="formato-pontos">:</span>
                        <div class="flex-column">
                            <span class="formato"><?php echo segAtual();?></span>
                            <span class="info">Segundos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
          
        </div>

    </main>
</body>

</html>