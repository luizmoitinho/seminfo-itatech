this.setInterval(function () {
    atualizarCronometro()
}, 1000)

var screenWidth = window.innerWidth;
if (screenWidth <= 600) {
    compactarDescricaoLocalizacao()
}
else {
    descompactarLocalizacao()
}
window.addEventListener("resize", () => {
    var screenWidth = window.innerWidth;
    if (screenWidth <= 600) {
        compactarDescricaoLocalizacao()
    }
    else {
        descompactarLocalizacao()
    }

});
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
function compactarDescricaoLocalizacao() {

    $(".descricao-local").css("visibility", "hidden");
    $(".icon-localizacao").css("display", "block");
}
function atualizarCronometro() {
    getCronometro(function (res) {
        $("#seg").animate({
            top: "2px"
        });
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



function transformIcon() {
    let icons_bar = document.getElementsByClassName("icon-bar");
    if (icons_bar[0].style.transform == "")
        icons_bar[0].style.transform = " rotate(45deg) translate(3px, -6px)";
    else
        icons_bar[0].style.transform = ""
}
showCronometro();
function showCronometro() {
    //$("#cronometro").css("visibility","visible");
    $("#cronometro").slideDown("slow");
}

