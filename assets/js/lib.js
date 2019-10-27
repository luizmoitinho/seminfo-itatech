
window.addEventListener("load", function(){
    this.setInterval(function(){
        atualizarCronometro()},1000)
});


function atualizarCronometro(){
    getCronometro(function(res){
        console.log(res);
        let cronometro = JSON.parse(res);
        document.getElementById('dias').textContent = cronometro['dias'];
        document.getElementById('horas').textContent= cronometro['horas'];
        document.getElementById('seg').textContent = cronometro['seg'];
        document.getElementById('min').textContent = cronometro['min'];
    });
   
}
function getCronometro(cronometro){
    $.ajax({
        url:"funcoes.php",
        type:"POST",
        success:function(res){
            cronometro(res);
        },
        error:function(){
            alert('Ocorreu um problema na conexao ! :/');
        }
    });
}
