<!DOCTYPE html>
<html lang="pt-br">
<title>SEMINFO - UFS 2019</title>
<?php require_once("head.php")?>

<body class="background">
    <?php require_once("barra_navegacao.php")?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div id="painel-cronometro">
                    <div class="flex-column">
                        <span class="destaque-amarelo"> VI SEMINFO 2019 - Evento de Tecnologia</span>
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
                            <div class="flex-column contorno-numeros">
                                <span id="dias"> </span>
                                <span class="info">Dias</span>
                            </div>
                            <div class="flex-column contorno-numeros">
                                <span id="horas"> </span>
                                <span class="info">Horas</span>
                            </div>
                            <div class="flex-column contorno-numeros">
                                <span id="min"></span>
                                <span class="info">Minutos</span>
                            </div>
                            <div class="flex-column contorno-numeros">
                                <span id="seg"></span>
                                <span class="info">Segundos</span>
                            </div>
                            <div id="triangulo-para-esquerda"></div>
                        </div>
                        <span id="data-seminfo">Nos dias 11, 12 e 13 de Dezembro no Campus da UFS de
                            Itabaiana.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex-column localizacao">
                <div class="flex-row">
                    <iframe class="local-maps" id="maps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.6844076986067!2d-37.43792471479275!3d-10.681586119682526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x70ffa833420217d%3A0xa0b15971b80f4151!2sUniversidade%20Federal%20de%20Sergipe%2C%20Campus%20Itabaiana!5e0!3m2!1spt-BR!2sbr!4v1572717954299!5m2!1spt-BR!2sbr"
                        width="950" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </iframe>
                </div>
            </div>
        </div>
        <div class="container-fluid info-seminfo">
            <div class="flex-column">
                    <span class="topico-seminfo">SEMINFO</span>
            </div>
            <div class="row">
                <div class="col-md-8">
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
                <div class="col-md-4">
                        <img src="assets/img/ufs.jfif" class="img-logo-ufs margin-bottom">
                        <img src="assets/img/logo-seminfo.jpeg" class="img-logo-seminfo margin-bottom">
                        <img src="assets/img/logo-itatech.jpeg"  class="img-logo-itatech margin-bottom">
                </div>
                
            </div>  
            <div class="flex-column">
                    <a href="https://www.sigaa.ufs.br/sigaa/public/extensao/paginaListaPeriodosInscricoesAtividadesPublico.jsf?aba=p-extensao"
                    target="_blank" class="btn-inscrever">
                        <span>Inscreva-se</span>
                    </a>
            </div>
        </div>
        <img src="assets/img/ufs-toda.jpg" class="img-fundo-ufs ">
        <div class="container-fluid info-seminfo margin-bottom">
            <span class="topico-seminfo">Colabore com o evento</span>
            <div class="row">
                    <div class="col-md-12">
                            <div id="Apoio">
                                <span class="descricao-topico">Não deixe sua empresa fora de um dos maiores eventos de
                                    tecnologia do Estado de Sergipe!
                                </span>  
                            </div>
                            <div class="flex-column">
                            <a href="apoie_me.php" class="btn-inscrever">
                                <span>Clique Aqui!</span>
                            </a>
                            </div>
                            
                        </div>
                    </div>
            </div>
        </div>

      
    </main>
    <?php require_once("footer.php")?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/lib.js"></script>

</body>

</html>