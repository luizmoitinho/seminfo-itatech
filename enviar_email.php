<?php
// Recebendo dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$msg = $_POST['msg'];
$subject = "Mensagem da SEMINFO -  2019";

if(array_key_exists('opcoes',$_POST) )
    $opcoes = $_POST['opcoes'];
else
    $opcoes="Não selecionou nenhum tipo de patrocinio";


$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$corpo = "Formulário da página de contato - SEMINFO <br>";
$corpo .= "Nome       : " . $nome . " <br>";
$corpo .= "Telefone   : " . $tel . " <br>";
$corpo .= "Email      : " . $email . " <br>";
$corpo .= "Patrocionio: " . $opcoes . " <br>";
$corpo .= "Mensagem   : " . $msg . " <br>";

// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'contato@itatechjr.com.br';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);

if ($status)
    echo "<div class='alert alert-success flex-column' role='alert'>
                Obrigado por entrar em contato! Nossa equipe analisará as informações.
            </div>";
else
    echo " <div class='alert alert-danger align-middle' role='alert'>
             Ocorreu um erro ao entrar em contato conosco. Tente novamente, mais tarde!
            </div>";

?>