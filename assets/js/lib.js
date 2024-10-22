

$("#painel-cronometro").hide();

$('#slogan').hide();
$('body').hide();


$(document).ready(function(){
 setTimeout(function(){
     $("body").fadeIn(1000)
     },1500);
    setTimeout(function(){
        $("#painel-cronometro").fadeIn(1000),
        $("#slogan").fadeToggle(1000)
    },1500)
})

if(document.getElementById('cronometro')){
    
    this.setInterval(function () {
        atualizarCronometro()
    }, 1000);
    
    showCronometro();
}

$('#fale-conosco').click(function(){
    if(validarInputs()){
        var _nome =$('#nome').val();
        var _email =$('#email').val();
        var _telefone =$('#telefone').val();
        var _opcoes =  $('#opcoes option:selected').val();
        var _msg =$('#msg').val();

        var data = { nome:_nome, email:_email,telefone:_telefone,opcoes:_opcoes, msg:_msg};
        
        $.post(
            'enviar_email.php', //Required URL of the page on server
            data,
            function(html,status){
                if(status == "success"){   
                    $("#status-envio").html(html);
                    $('#nome').val('');
                    $('#email').val('');
                    $('#telefone').val('');
                    $('#opcoes option:selected').val('');
                    $('#msg').val('');
                }    	
            }
        );
       
    }
})

function validarInputs(){
    let validos=true;
    if($('#nome').val()==""){
        $('#nome').css('border','1px solid red')
        validos =false;
    }
    else
        $('#nome').css('border','none')
    

    if($('#email').val()==""){
        $('#email').css('border','1px solid red')
        validos =false;
    }
    else
        $('#email').css('border','none')

    if($('#telefone').val()==""){
        $('#telefone').css('border','1px solid red')
        validos =false;
    }
    else
        $('#telefone').css('border','none')


    if($('#msg').val()==""){
        $('#msg').removeClass('border');
        $('#msg').css('border','1px solid red')
        validos =false;
    }
    else
        $('#msg').addClass('border')

    return validos;
    

}


$(".logo-patrocinador").on('mouseenter',function(response){
    $(this).children('.detalhe-patrocinador-ouro').fadeIn(400) 
    $(this).children('.detalhe-patrocinador').fadeIn(400) 
});

$(".logo-patrocinador").on('mouseleave',function(response){
    $(this).children('.detalhe-patrocinador-ouro').fadeToggle(400) 
    $(this).children('.detalhe-patrocinador').fadeToggle(400)
});

$('#btn-ver-mais').click(function(){
    if($('.detalhes-cursos').css("display")=="none"){
        $('#btn-ver-mais').text('- Esconder');
        $('.detalhes-cursos').slideDown();
    }
    else{
        $('#btn-ver-mais').text('+ Ver Mais Detalhes');
        $('.detalhes-cursos').slideUp();
    }
});

$(".dt-patrocionio").click(function(){
    if($(this).next().css("visibility")=="visible")
         $(this).next().css("visibility","hidden")
    else
        $(this).next().css("visibility","visible")
    
});

function transformIcon() {
    let icons_bar = document.getElementsByClassName("icon-bar");
    if(icons_bar[0].style.transform=="")
        icons_bar[0].style.transform=" rotate(45deg) translate(3px, -6px)";
    else
        icons_bar[0].style.transform=""
}

function atualizarCronometro() {
    getCronometro(function (res) {
        let cronometro = JSON.parse(res);
        document.getElementById('dias').textContent = cronometro['dias'];
        document.getElementById('horas').textContent = cronometro['horas'];
        document.getElementById('min').textContent = cronometro['min'];
        document.getElementById('seg').textContent = cronometro['seg'];
    });
}


function getCronometro(cronometro) {
    $.ajax({
        url: "funcoes.php",
        type: "POST",
        success: function (res) {
            cronometro(res);
        },
        error: function () {
           
        }
    });
}

function showCronometro() {
    $("#cronometro").slideDown("slow");
}

function selecionaPatrocinio(){
    let checkbox =  document.getElementById("patrocinio");
    if(checkbox.checked){
        $("#tipos-patrocinios").slideDown();        
    }
    else{
        $("#tipos-patrocinios").slideToggle();
    }
}



window.addEventListener('orientationchange', function(){
    switch(window.orientation){ 
        case 90: 
            $("footer").css("position", "relative")
        break; 
        default:
                $("footer").css("position", "relative")
    }
    
});
