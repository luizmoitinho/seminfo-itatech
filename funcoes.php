<?php
date_default_timezone_set('America/Sao_Paulo');

define("diaSeminfo",'2');

function diaAtual(){
    return date('d');
}
function horaAtual(){
    echo date('H');
}

function minAtual(){
    echo date('m');
}

function segAtual(){
    echo date('s');
}

function diasRestantes(){
    $dataAtual=date("d/m/Y");
    $dataAtual =  explode('/',$dataAtual);
    // Converte a data para segundos
    $dataAtual  = strtotime($dataAtual[2]."-".$dataAtual[1]."-".$dataAtual[0]);
    $dataSeminfo= strtotime("2019-12-2");
    //Converte a data para dias
    $diasRestantes =  floor(($dataSeminfo - $dataAtual)/86400);
    if($diasRestantes<=0)
        return "0";
    else
        return  $diasRestantes;;
}

function horasRestantes(){
    $horaAtual = date("H");
    return (diasRestantes()*24) - $horaAtual; 

}

function minRestantes(){
    $minutoAtual = date("m");
    return $minutoAtual;
}

function segsRestantes(){
    $sgAtual = date("s");
    return $segAtual;
}


