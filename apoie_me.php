<!DOCTYPE html>
<html lang="pt-br"> 
    <title>Apoio a SEMINFO 2019</title>
    <?php require_once("head.php")?>

<body>
        <?php require_once("barra_navegacao.php")?>
       
        <main>

            <div class="painel-eventos">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="contato-apoio">
                                <span class="topico-seminfo">Fale Conosco</span>
                                <div class="flex-column">
                                    <form class="form-group col-md-5" action="enviar_email.php" method="POST">
                                        <input class="form-control item-contato" type="text" placeholder="Digite Seu Nome" name="nome">
                                        <input class="form-control item-contato" placeholder="E-mail" type="email" name="email">
                                        <input class="form-control item-contato" placeholder="Telefone para contato" type="number" name="telefone">
                                        <input type="checkbox" id="patrocinio" onclick="selecionaPatrocinio()">
                                        <label for="patrocinio">Desejo apoiar o evento </label>
                                        <div id="tipos-patrocinios">  
                                        </div>
                                        <Textarea class="form-group col-md-12 item-contato" name="msg" rows="5" placeholder="Digite aqui alguma dúvida ou informação"></Textarea>
                                        <button class="btn-lg btn-success">Enviar</button>
                                    </form>
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