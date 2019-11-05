<?php
 
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['msg'];
    if(array_key_exists('apoio',$_POST) )
        $opcoes = $_POST['apoio'];
    else
        $opcoes="Não selecionou nenhum tipo de patrocinio";
    $assunto = "SEMINFO -2019";
   
    $para = "luizcarlos_costam@hotmail.com";

    $corpo_email = "
    <style type='text/css'>
    body {
    margin:0px;
    font-family:Verdane;
    font-size:12px;
    color: #666666;
    }
    a{
    color: #666666;
    text-decoration: none;
    }
    a:hover {
    color: #FF0000;
    text-decoration: none;
    }
    </style>
        <html>
            <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
                <tr>
                <td>
    <tr>
                    <td width='500'>Nome:$nome</td>
                    </tr>
                    <tr>
                    <td width='320'>E-mail:<b>$email</b></td>
        </tr>
        <tr>
                    <td width='320'>Telefone:<b>$telefone</b></td>
                    </tr>
        <tr>
                    <td width='320'>Opções:$opcoes</td>
                    </tr>
                    <tr>
                    <td width='320'>Mensagem:$mensagem</td>
                    </tr>
                </td>
            </tr>  
            </table>
        </html>
    ";


   
    $envio = enviaEmail($email, $assunto, $mensagem, $para);
    if($envio){
        echo "mail_ok.php";
    } else {
        echo "mail_error.php";
    }
    

    function enviaEmail($de, $assunto, $mensagem, $para) {
        $headers = "From: $email_servidor\r\n" .
                   "Reply-To: $de\r\n" .
                   "X-Mailer: PHP/" . phpversion() . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
      
      mail($para, $assunto, nl2br($corpo_email), $headers);
    }
?>