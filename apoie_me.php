<div class="container-fluid bg-white ">
    <div class="row margin-bottom">
        <div class="col-md-12">
            <div class="flex-column margin-bottom-1">
                <h1 class="">Fale conosco!</h1>
                
                <form class="form-group col-md-5 flex-column"  id="formulario_contato">
                    <div id="status-envio" align="center">
                    </div>
                    <input class="form-control item-contato" type="text" placeholder="Digite Seu Nome" name="nome" id="nome">
                    <input class="form-control item-contato" placeholder="E-mail" type="email" name="email"  id="email" >
                    <input class="form-control item-contato" placeholder="Telefone para contato" type="number"
                        name="telefone" id="telefone">
                    <div class="form-check" onclick="selecionaPatrocinio()">
                        <label for="patrocinio">
                            <input type="checkbox" id="patrocinio">
                            Desejo apoiar o evento </label>
                    </div>
                    <div id="tipos-patrocinios">
                        <div class="item-contato">
                            <select class="form-control tipo-patrocinio " id="opcoes" name="opcoes">
                                <option focusable></option>
                                <option disabled>Seleciona uma categoria</option>
                                <option value="Diamante">Diamante</option>
                                <option value="Ouro">Ouro</option>
                                <option value="Prata">Prata</option>
                                <option value="Bronze">Bronze</option>
                            </select>
                        </div>
                    </div>
                    <Textarea class="form-group col-md-12 item-contato border"  name="msg" id="msg" rows="5"
                        placeholder="Digite aqui alguma dúvida ou informação"></Textarea>
                </form>
                <button class="btn-lg btn-inscrever-inverse" id="fale-conosco">Enviar</button>
                
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