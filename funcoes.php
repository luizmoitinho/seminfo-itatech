<?php
date_default_timezone_set('America/Bahia');
$Resto = 0;
$cronometro =  array();
$cronometro ['dias'] = DiasRestantes();
$cronometro ['horas'] = HorasRestantes();
$cronometro ['min'] = MinutosRestantes();
$cronometro ['seg'] = SegundosRestantes();
echo json_encode($cronometro);

function DiferencaDatas(){
    global $Resto;
    $dataAtual = date("Y-m-d H:i:s");
    $dataSeminfo= strtotime("2019-12-11 8:00:00");
    $dataAtual = strtotime($dataAtual);
    $diferencaDatas = $dataSeminfo - $dataAtual;
    if($diferencaDatas >= 0){
        return $diferencaDatas;
    }
    else{
        return 0;
    }
}
function DiasRestantes(){
    global $Resto;
    $difDatas =  DiferencaDatas();
    $diasRestantes = floor($difDatas/86400);
    $Resto = $difDatas % 86400;
    return $diasRestantes;
}

function HorasRestantes(){
    global $Resto;
    $horaAtual = floor($Resto/3600);
    $Resto = $Resto % 3600;
    return $horaAtual; 
}

function MinutosRestantes(){
    global $Resto;
    $minutoAtual = floor($Resto/60);
    $Resto = $Resto % 60;
    return $minutoAtual;
}

function SegundosRestantes(){
    global $Resto;
    return $Resto;
}

