<?php

date_default_timezone_set('America/Sao_Paulo');
$Resto = 0;

function DiasRestantes(){
    global $Resto;
    $dataAtual = date("Y-m-d H:i:s");
    $dataSeminfo= strtotime("2019-12-04 8:00:00");
    $dataAtual = strtotime($dataAtual);

    $Auxiliar1 = $dataSeminfo - $dataAtual;

    $diasRestantes = floor($Auxiliar1/86400);
    $Resto = $Auxiliar1 % 86400;

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