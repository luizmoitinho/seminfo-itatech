<!DOCTYPE html>
<html lang="pt-br"> 
    <title>Apoio a SEMINFO 2019</title>
    <?php require_once("head.php")?>

<body class="bg-cinza-light">
        <?php require_once("barra_navegacao.php")?>
        <main>
         
            <div class="container contato-apoio">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="flex-column">
                        
                            <span class="titulo-topicos">Fale Conosco</span>
                            <form class="form-group col-md-5" action="enviar_email.php" method="POST">
                                <input class="form-control item-contato" type="text" placeholder="Digite Seu Nome" name="nome">
                                <input class="form-control item-contato" placeholder="E-mail" type="email" name="email">
                                <input class="form-control item-contato" placeholder="Telefone para contato" type="number" name="telefone">
                                <div class="form-check">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="patrocinio" onclick="selecionaPatrocinio()">
                                        <label for="patrocinio" class="form-check-label">Desejo apoiar o evento </label>
                                    </div>
                                </div>
                                <div id="tipos-patrocinios">  
                                </div>
                                <Textarea class="form-group col-md-12 item-contato border" name="msg" rows="5" placeholder="Digite aqui alguma dúvida ou informação"></Textarea>
                                <button class="btn-lg btn-success">Enviar</button>
                            </form>
                            <?php  if (array_key_exists('status',$_GET)):
                                if($_GET['status']=='sucesso'): ?>
                                <div class="alert alert-success" role="alert">
                                    Obrigado por entrar em contato! Nossa equipe analisará as informações.
                                </div>
                                <?php else: ?>
                                    <div class="alert alert-danger" role="alert">
                                        Ocorreu um erro ao entrar em contato conosco. Tente novamente, mais tarde!
                                    </div>
                                 <?php endif;?>

                            <?php endif;?>
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