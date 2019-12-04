<!DOCTYPE html>
<html lang="pt-br">
<title>SEMINFO - UFS 2019</title>
<?php require_once("head.php")?>

<body class="bg-cinza-light">
    <?php require_once("barra_navegacao.php")?>
    <main>
        <div class="container-fluid margin-bottom  background">
            <div class="row justify-content-end" id="placar-data">
                <div class="data-seminfo flex-column" >
                    <div>11 a 13 de Dezembro</div>
                    <div class="detalhe-data">UFS Itabaiana</div>
                </div> 
            </div>
            <div class="row ">
                <div id="painel-cronometro" class="col-md-12">
                    <div class="flex-column ">
                        <span class="destaque-seminfo margin-bottom"> VI SEMINFO 2019 - Tecnologia e Empreendedorismo</span>
                        <p id="slogan" class="col-md-9">
                        O Departamento de Sistemas de Informação (DSI) e a ItatechJr promovem, anualmente, a SEMINFO (Semana de Informática). Serão desenvolvidas palestras, minicursos e uma maratona de programação com o intuito de apresentar, motivar e integrar alunos e empresas da área de computação.                        </p>
                    </div>
                    <div id="cronometro" class="flex-column">
                        <div class="flex-row">
                            <div id="triangulo-para-direita"></div>
                            <div class="flex-column item-cronometro">
                                <span id="dias"> </span>
                                <span class="info-cronometro ">Dias</span>
                            </div>
                            <div class="flex-column item-cronometro">
                                <span id="horas"> </span>
                                <span class="info-cronometro">Horas</span>
                            </div>
                            <div class="flex-column item-cronometro">
                                <span id="min"></span>
                                <span class="info-cronometro">Minutos</span>
                            </div>
                            <div class="flex-column item-cronometro">
                                <span id="seg"></span>
                                <span class="info-cronometro">Segundos</span>
                            </div>
                            <div id="triangulo-para-esquerda"></div>
                        </div>
                        
                    </div>   
                

                   
                </div>
                
            </div>
        </div>
        
        <div class="container ">
            <div class="row">
            
                <div class="col-md-6 flex-column container-div">
                    <span class="titulo-topicos">Realização</span>
                    <img src="assets/img/conjunto.png">
                </div>
                <div class="col-md-6 flex-column container-div">
                <span class="titulo-topicos">Apoio</span>
                    ​<div class="col-md-6 margin-bottom-1 flex-column">
                        <source srcset="assets/img/diamante/lindolar.png" type="image/svg+xml">
                        <img src="assets/img/Fabrica de Software 2.png" class="img-fluid rounded" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-column ">
            <?php  require_once('atividades.php')?>
        </div>
        <div class="container margin-bottom " id="localizacao">
            <div class="flex-column">
            </div>
            <div class="row">
                <div class="col-md-8">
                    <iframe class="local-maps" id="maps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.6844076986067!2d-37.43792471479275!3d-10.681586119682526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x70ffa833420217d%3A0xa0b15971b80f4151!2sUniversidade%20Federal%20de%20Sergipe%2C%20Campus%20Itabaiana!5e0!3m2!1spt-BR!2sbr!4v1572717954299!5m2!1spt-BR!2sbr"
                        frameborder="0" allowfullscreen=""></iframe>
                    </iframe>
                </div>
                <div class="col-md-4 detalhe-localizacao">
                    <div>
                        <h2 class="font-weight-bold">Local do Evento</h2>
                        <h4 class="font-weight-lighter">11/12/2019 - 13/12/2019</h4>
                        <h5 class="ont-weight-light">Universidade Federal de Sergipe</h5>
                        <h5 class="font-weight-light">Campus Prof. Alberto Carvalho</h5>

                        <h5 class="font-weight-lighter">Hall de entrada - Auditório</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-div margin-bottom" id="patrocinadores">
            <span class="titulo-topicos">Patrocinadores</span>
            <!--  diamante -->
            <div class="row  justify-content-center margin-bottom ">
                ​<div class="col-md-3 col-5 margin-bottom-1 flex-column">
                    <source srcset="assets/img/diamante/lindolar.png" type="image/svg+xml">
                    <img src="assets/img/diamante/lindolar.png" class="img-diamante rounded" alt="...">
                </div>
                ​ <picture class="col-md-4  col-5 margin-bottom-1 flex-column">
                    <source srcset="assets/img/diamante/Real.jpg" type="image/svg+xml">
                    <img src="assets/img/diamante/Real.jpg" class="img-diamante rounded" alt="...">
                </picture>
                <picture class="col-md-4 col-5 margin-bottom-1 flex-column">
                    <source srcset="assets/img/diamante/MerceariaBarreto.JPG" type="image/svg+xml">
                    <img src="assets/img/diamante/MerceariaBarreto.JPG" class="img-diamante rounded" alt="...">
                </picture>
                <picture class="col-md-4  col-5 margin-bottom-1 flex-column">
                    <source srcset="assets/img/diamante/Walber1.JPG" type="image/svg+xml">
                    <img src="assets/img/diamante/Walber1.JPG" class="img-diamante-larga rounded" alt="...">
                </picture>

            </div>
            <!--  ouro   -->
            <div class="row d-flex justify-content-center margin-bottom">
            <picture class="col-md-4 col-4">
                    <source srcset="assets/img/ouro/CentralNet.jpg" type="image/svg+xml">
                    <img src="assets/img/ouro/Vip.jpg" class="img-ouro rounded" alt="...">
                </picture>
                <picture class="col-md-4 col-4 flex-column">
                    <source srcset="assets/img/ouro/ProCunha.jpg" type="image/svg+xml">
                    <img src="assets/img/ouro/Vip.jpg" class="img-ouro-larga rounded" alt="...">
                </picture>
                <picture class="col-md-4 col-4">
                    <source srcset="assets/img/ouro/Vip.jpg" type="image/svg+xml">
                    <img src="assets/img/ouro/Vip.jpg" class="img-ouro rounded" alt="...">
                </picture>
           
                
            </div>
            <!--  prata-->
            <div class="row d-flex justify-content-center ">
                <div class="col-md-3 col-3">
                    <div class="logo-patrocinador-prata">
                        <img src="assets/img/prata/Alpha.jpg" class="img-fluid img-prata">
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="logo-patrocinador-prata ">
                        <img src="assets/img/prata/CStech.jpg" class="img-fluid img-prata">
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="logo-patrocinador-prata ">
                        <img src="assets/img/prata/IrmaosPeixoto.jpg" class="img-fluid img-prata">
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="logo-patrocinador-prata ">
                        <img src="assets/img/prata/NunesPeixoto.jpg" class="img-fluid img-prata">
                    </div>
                </div>
            </div>

        </div>
        <!-- apoie-me -->
        <?php require_once("apoie_me.php");?>
    </main>
    <!-- footer -->
    <?php require_once("footer.php")  ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/lib.js"></script>

</body>

</html>