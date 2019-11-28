<!DOCTYPE html>
<html lang="pt-br">
<title>SEMINFO - UFS 2019</title>
<?php require_once("head.php")?>

<body class="bg-cinza-light">
    <?php require_once("barra_navegacao.php")?>
    <div class="container-fluid  background">
        <div class="row">
            <div class="painel-principal">

            </div>
        </div>
    </div>
    <main>
        <div class="container-fluid">
            <div class="row ">
                <div id="painel-cronometro" class="col-md-12">
                    <div class="flex-column">
                        <span class="destaque-seminfo"> VI SEMINFO 2019 - Evento de Tecnologia</span>
                        <span id="slogan">
                            Matenha-se conectado nas tecnologias da área de TI
                        </span>
                        <span id="slogan">
                            com Palestras e Cursos!
                        </span>
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
                        <span id="data-seminfo">Nos dias 11, 12 e 13 de Dezembro no Campus da UFS de
                            Itabaiana.</span>
                    </div>
                    <a href="https://www.sigaa.ufs.br/sigaa/public/extensao/paginaListaPeriodosInscricoesAtividadesPublico.jsf?aba=p-extensao"
                        target="_blank" class="btn-inscrever">
                        <span>Inscreva-se</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex-column ">
            <?php  require_once('atividades.php')?>
        </div>
        <div class="container container-div">
            <div class="flex-column">
                <span class="titulo-topicos">Sobre</span>
            </div>
            <div class="row">
                <div class="col-md-8 ">
                    <p class="descricao-topico">
                        A Semana de Informática da Universidade Federal de Sergipe – Campus
                        Itabaiana – é um simpósio organizado pela Universidade Federal de Sergipe – UFS apoiado
                        pela Itatech Jr.(empresa Júnior, formada por alunos) e com o apoio dos professores e
                        alunos do curso Sistemas de Informação que visa proporcionar aos participantes acesso a
                        novos conhecimentos, conceitos e novas tecnologias, por intermédio de palestras e
                        minicursos. Proporcionando assim, uma integração entre os alunos do curso de Sistemas de
                        Informação da UFS - Itabaiana com alunos e profissionais de outras localidades e
                        instituições.
                    </p>
                </div>
                <div class="col-md-4 flex-column">
                    <img src="assets/img/conjunto.png">
                </div>

            </div>
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
        <div class="container-fluid container-div margin-bottom">
            <span class="titulo-topicos">Patrocinadores</span>
            <!--  diamante -->
            <div class="row  justify-content-center margin-bottom ">
                ​<div class="col-md-3 col-5 margin-bottom-1 flex-column">
                    <source srcset="assets/img/diamante/lindolar.png" type="image/svg+xml">
                    <img src="assets/img/diamante/lindolar.png" class="img-diamante rounded" alt="...">
                </div>
    ​            <picture class="col-md-3  col-5 margin-bottom-1 flex-column">
                    <source srcset="assets/img/diamante/Real.jpg" type="image/svg+xml">
                    <img src="assets/img/diamante/Real.jpg" class="img-diamante rounded" alt="...">
                </picture>
                <picture class="col-md-3 col-5 margin-bottom-1 flex-column">
                    <source srcset="assets/img/diamante/MerceariaBarreto.JPG" type="image/svg+xml">
                    <img src="assets/img/diamante/MerceariaBarreto.JPG" class="img-diamante rounded" alt="...">
                </picture>
                <picture class="col-md-3  col-5 margin-bottom-1 flex-column">
                    <source srcset="assets/img/diamante/Walber1.JPG" type="image/svg+xml">
                    <img src="assets/img/diamante/Walber1.JPG" class="img-diamante rounded" alt="...">
                </picture>
               
            </div>         
            <!--  ouro   -->
            <div class="row d-flex justify-content-center margin-bottom">
                <picture class="col-md-12 col-12">
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