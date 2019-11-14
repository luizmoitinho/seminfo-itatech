$('.detalhe-patrocinador').hide();
/*$("#painel-cronometro").hide();
$('body').hide();

$(document).ready(function(){
 setTimeout(function(){
     $("body").fadeIn(1000)
     },1500);
    setTimeout(function(){
        $("#painel-cronometro").fadeIn(1000)
    },1500)

})*/

if(document.getElementById('cronometro')){
    
    this.setInterval(function () {
        atualizarCronometro()
    }, 1000);
    
    showCronometro();
}


$(".logo-patrocinador").on('mouseenter',function(response){
    $(this).children('.detalhe-patrocinador').fadeIn(400)
});
$(".logo-patrocinador").on('mouseleave',function(response){
    $(this).children('.detalhe-patrocinador').fadeToggle(400)
});

$('#btn-ver-mais').click(function(){
    if($('.mais-patrocinadores').css("display")=="none"){
        $('#btn-ver-mais').text('- Esconder');
        $('.mais-patrocinadores').slideDown();
    }
    else{
        $('#btn-ver-mais').text('+ Ver mais');
        $('.mais-patrocinadores').slideUp();
    
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
            alert('Ocorreu um problema na conexao ! :/');
        }
    });
}


function showCronometro() {
    $("#cronometro").slideDown("slow");
}



function selecionaPatrocinio(){
    let checkbox =  document.getElementById("patrocinio");
    let tipos_patrocinios =  document.getElementById("tipos-patrocinios");
    if(checkbox.checked){
        tipos_patrocinios.innerHTML=
            '<div  class="item-contato">'+              
            '<select class="form-control tipo-patrocinio" name="opcoes" required>'+
            '<option  autofocus></option>'+
            '<option  disabled>Seleciona uma categoria</option>'+
            '<option  value="Diamante">Diamante</option>'+
            '<option  value="Ouro">Ouro</option>'+
            '<option  value="Prata">Prata</option>'+
            '<option  value="Bronze">Bronze</option>'+
            '</select>'+
            '<div>'
    }
    else{
        tipos_patrocinios.innerHTML="";
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
