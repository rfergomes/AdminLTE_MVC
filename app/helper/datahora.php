<?php
function hoje(){
    return date("Y-m-d");
}

function agora(){
    return date("H:i:s");
}
 function extrair_data($data, $opcao=1){
     //Opção 1-EN 2-BR
     if ($opcao==1){
         $dia = substr($data,8,2);
         $mes = substr($data,5,2);
         $ano = substr($data,0,4);      
     }
     else{
         $dia = substr($data,0,2);
         $mes = substr($data,3,2);
         $ano = substr($data,6,4);
     }
     return array($dia,$mes,$ano);
 }
 //Transforma data do formato inglês para o Brasileiro
 function databr($data) {
     $data = extrair_data($data, 1);
     return $data[0] . "/" .$data[1] ."/" .$data[2];        
 } 
 
 //Transforma data do formato Brasileiro para o Inglês
 function dataEn($data){
     $data = extrair_data($data, 0);
     return $data[2] . "-" .$data[1] ."-" .$data[0]; 
 }
 
 //Extrai o dia de uma data
 function extraiDia($data, $opcao=1){
     $data = extrair_data($data, $opcao);
     return $data[0];
 }
 //Extrai o mês de uma data
 function extraiMes($data, $opcao=1){
     $data = extrair_data($data, $opcao);
     return $data[1];
 } 

 //Extrai o ano de uma data
 function extraiAno($data, $opcao=1){
     $data = extrair_data($data, $opcao);
     return $data[2];
 }
 
 function subtrairDatas($strData1, $strData2){     
     $datetime1 = new DateTime($strData1);
     $datetime2 = new DateTime($strData2);
     return $datetime1->diff($datetime2);
 } 
 function diferencaEmHora($strData1, $strData2){
     //$d1 e $d2 y-m-d H:i:s
     $datetime1 = new DateTime($strData1);
     $datetime2 = new DateTime($strData2);
     $diferenca = $datetime1->diff($datetime2, true);
     return 24* $diferenca->d + $diferenca->h ;
 } 
 
 // gera o timestamp de uma data no formato DD/MM/AAAA
 function geraTimestampDMA($data) {
     $partes = explode('/', $data);
     return mktime(0, 0, 0, $partes[1], $partes[0], $partes[2]);
 }
 
 // gera o timestamp de uma data no formato AMD
 function geraTimestampAMD($data) {
     $partes = explode('-', $data);
     return mktime(0, 0, 0, $partes[1], $partes[2], $partes[0]);
 } 
 function somarData($data, $dias=0, $meses=0, $ano=0, $opcao=1 ){
     $data = extrair_data($data, $opcao);
     $resData2 = date("Y-m-d", mktime(0, 0, 0,$data[1] + $meses,   $data[0] + $dias, $data[2] + $ano));
     return $resData2;
 } 
 
 function diasemanaExtenso($data, $opcao=1) {
     $data = extrair_data($data, $opcao);     
     $diasemana = date("w", mktime(0,0,0,$data[1],$data[0],$data[2]) );     
     switch($diasemana) {
         case"0": $diasemana = "Domingo";       break;
         case"1": $diasemana = "Segunda-Feira"; break;
         case"2": $diasemana = "Terça-Feira";   break;
         case"3": $diasemana = "Quarta-Feira";  break;
         case"4": $diasemana = "Quinta-Feira";  break;
         case"5": $diasemana = "Sexta-Feira";   break;
         case"6": $diasemana = "Sábado";        break;
     }
     
     return $diasemana;
 }
 
 function diasemanaAbreviada($data, $opcao=1) {
     $data = extrair_data($data, $opcao);
     
     $diasemana = date("w", mktime(0,0,0,$data[1],$data[0],$data[2]) );
     
     switch($diasemana) {
         case"0": $diasemana = "Dom";       break;
         case"1": $diasemana = "Seg";   break;
         case"2": $diasemana = "Ter";   break;
         case"3": $diasemana = "Qua";  break;
         case"4": $diasemana = "Qui";  break;
         case"5": $diasemana = "Sex";   break;
         case"6": $diasemana = "Sáb";        break;
     }
     
     return $diasemana;
 }
 function CodigodiaSemana($data, $opcao=1) {
     $data = extrair_data($data, $opcao);     
     $diasemana = date("w", mktime(0,0,0,$data[1],$data[0],$data[2]) );     
     return $diasemana;
 }

 function imprimeMes($valor) {
     switch($valor) {         
         case"1": $ano = "Janeiro"; break;
         case"2": $ano = "Fevereiro";   break;
         case"3": $ano = "Março";  break;
         case"4": $ano = "Abril";  break;
         case"5": $ano = "Maio";   break;
         case"6": $ano = "Junho";        break;
         case"7": $ano = "Julho";        break;
         case"8": $ano = "Agosto";        break;
         case"9": $ano = "Setembro";        break;
         case"10": $ano = "Outubro";        break;
         case"11": $ano = "Novembro";        break;
         case"12": $ano = "Dezembro";        break;
     }
     
     return "$ano";
 }
 
 function imprimeMesAbreviado($valor) {
     switch($valor) {
         
         case "1": $ano = "Jan"; break;
         case "2": $ano = "Fev";   break;
         case "3": $ano = "Mar";  break;
         case "4": $ano = "Abr";  break;
         case "5": $ano = "Mai";   break;
         case "6": $ano = "Jun";        break;
         case "7": $ano = "Jul";        break;
         case "8": $ano = "Ago";        break;
         case "9": $ano = "Set";        break;
         case "10": $ano = "Out";        break;
         case "11": $ano = "Nov";        break;
         case "12": $ano = "Dez";        break;
     }
     
     return $ano;
 }
 
 function ultimoDiaMes($data){
     $date = new DateTime($data);
     $date->modify('last day of this month');
     return $date->format('d'); // somente o dia
 }
 
 function qtdeDiasNoMes($data, $opcao=1){
     $data = extrair_data($data, $opcao);
     return cal_days_in_month ( CAL_GREGORIAN , intval($data[1]) , $data[2] ); 
 }
 
 
 
