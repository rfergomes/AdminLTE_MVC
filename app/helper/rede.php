<?php
//Retorna o IP
function get_ip(){
    $variables = array('REMOTE_ADDR',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'HTTP_X_COMING_FROM',
        'HTTP_COMING_FROM',
        'HTTP_CLIENT_IP');
    
    $return = 'Unknown';
    
    foreach ($variables as $variable)
    {
        if (isset($_SERVER[$variable])){
            $return.= $_SERVER[$variable]." - ";
        }
    }
    
    return $return;
}

function enviarPostCurl($url, $dados){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $result = curl_exec($ch);
    curl_close($ch);
    
    return $result;
}
function enviarPutCurl($url, $dados){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PUT, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $result = curl_exec($ch);
    curl_close($ch);
    
    return $result;
}

function enviarGetCurlSDecode($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $json = curl_exec($ch);
    
    curl_close($ch);
    
    return $json;
}

function enviarGetCurl($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $json = curl_exec($ch);
    
    $resultado = json_decode($json);
    curl_close($ch);
    
    return $resultado;
}