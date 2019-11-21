<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-md-12">
            <div class="flex-column ">
                <h1 class="">Fale conosco!</h1>
                <form class="form-group col-md-5 flex-column" action="enviar_email.php" method="POST">
                    <input class="form-control item-contato" type="text" placeholder="Digite Seu Nome" name="nome">
                    <input class="form-control item-contato" placeholder="E-mail" type="email" name="email">
                    <input class="form-control item-contato" placeholder="Telefone para contato" type="number"
                        name="telefone">
                    <div class="form-check" onclick="selecionaPatrocinio()">
                        <label for="patrocinio">
                            <input type="radio" id="patrocinio">
                            Desejo apoiar o evento </label>
                    </div>
                    <div id="tipos-patrocinios">
                        <div class="item-contato">
                            <select class="form-control tipo-patrocinio" name="opcoes" required>
                                <option autofocus></option>
                                <option disabled>Seleciona uma categoria</option>
                                <option value="Diamante">Diamante</option>
                                <option value="Ouro">Ouro</option>
                                <option value="Prata">Prata</option>
                                <option value="Bronze">Bronze</option>
                            </select>
                        </div>
                    </div>
                    <Textarea class="form-group col-md-12 item-contato border" name="msg" rows="5"
                        placeholder="Digite aqui alguma dúvida ou informação"></Textarea>
                    <button class="btn-inscrever-inverse">Enviar</button>
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