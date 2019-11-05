if(document.getElementsByTagName('cronometro')){
    this.setInterval(function () {
        atualizarCronometro()
    }, 1000)
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
function descompactarLocalizacao() {
    $(".descricao-local").css("visibility", "visible")
    $(".icon-localizacao").css("display", "none");
}

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


showCronometro();
function showCronometro() {
    $("#cronometro").slideDown("slow");
}

function selecionaPatrocinio(){
    let checkbox =  document.getElementById("patrocinio");
    let tipos_patrocinios =  document.getElementById("tipos-patrocinios");
    if(checkbox.checked){
        tipos_patrocinios.innerHTML=
            '<div  class="item-contato">'+              
            '<select class="form-control tipo-patrocinio" name="opcoes">'+
            '<option  autofocus></option>'+
            '<option  disabled>Seleciona uma categoria</option>'+
            '<option  value="1">Diamante</option>'+
            '<option  value="2">Ouro</option>'+
            '<option  value="3">Prata</option>'+
            '<option  value="4">Bronze</option>'+
            '</select>'+
            '<div>'
    }
    else{
        tipos_patrocinios.innerHTML="";
    }
}


