<?php

#Força HTTPS
// iis sets HTTPS to 'off' for non-SSL requests
if ($use_sts && isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    header('Strict-Transport-Security: max-age=31536000');
} elseif ($use_sts) {
    header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], true, 301);
    // we are in cleartext at the moment, prevent further execution and output
    die();
}

#Define tipo de Acesso    
define('ACESSO', $_SERVER['HTTP_HOST'] == 'www.ead.com.br' ? "remoto" : "local");

#Arquivos diretórios raízes
$PastaLocal = "/agora_adminlte/";   //#Adicionar '/' no inicio e fim
$PastaRemota = "/"; //#Adicionar '/' no inicio e fim

if (ACESSO == "local") {
    #BANCO DE DADOS LOCAL
    define("SERVIDOR", "localhost");
    define("BANCO", "agora_pedido");
    define("USUARIO", "root");
    define("SENHA", "");
    define("CHARSET", "UTF8");

    #Define URL do site LOCAL
    define('URL_BASE', "https://{$_SERVER['HTTP_HOST']}{$PastaLocal}");

    #Define URL padrão de Imagens
    define('URL_IMAGEM', "https://{$_SERVER['HTTP_HOST']}{$PastaLocal}fotos/");

    #Adiciona diretório na raiz, caso definido
    if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
        define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaLocal}");
    } else {
        define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaLocal}");
    }
} else {

    #BANCO DE DADOS REMOTO
    define("SERVIDOR", "https://{$_SERVER['HTTP_HOST']}");
    define("BANCO", "agora_ead_admin");
    define("USUARIO", "root");
    define("SENHA", "");
    define("CHARSET", "UTF8");

    #Define URL do site REMOTO
    define('URL_BASE', "https://{$_SERVER['HTTP_HOST']}{$PastaRemota}");

    #Define URL paddrão de imagens
    define('URL_IMAGEM', "https://{$_SERVER['HTTP_HOST']}{$PastaRemota}fotos/");

    #Adiciona diretório na raiz, caso definido
    if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
        define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaRemota}");
    } else {
        define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaRemota}");
    }
}

define('CONTROLLER_PADRAO', 'home');
define('METODO_PADRAO', 'index');
define('NAMESPACE_CONTROLLER', 'app\\controllers\\');
define('TIMEZONE', "America/Sao_paulo");
define('CAMINHO', realpath('./'));
define("TITULO_SITE", "AdminLTE | ");

define("SESSION_LOGIN", "usuario_logado");

$config_upload["verifica_extensao"] = false;
$config_upload["extensoes"] = array(".gif", ".jpeg", ".png", ".bmp", ".jpg");
$config_upload["verifica_tamanho"] = true;
$config_upload["tamanho"] = 3097152;
$config_upload["caminho_absoluto"] = realpath('./') . '/fotos/';
$config_upload["renomeia"] = true;
