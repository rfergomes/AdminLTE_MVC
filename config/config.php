<?php

#Arquivos diretórios raízes
$subpasta = "/agora_adminlte/";   //#Adicionar '/' no inicio e fim

#Define URL do site LOCAL
define('URL_BASE', $_SERVER["REQUEST_SCHEME"] . "://{$_SERVER['HTTP_HOST']}{$subpasta}");

#Define URL padrão de Imagens
define('URL_IMAGEM', $_SERVER["REQUEST_SCHEME"] . "://{$_SERVER['HTTP_HOST']}{$subpasta}fotos/");

#Adiciona diretório na raiz, caso definido
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$subpasta}");
} else {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$subpasta}");
}

#Define local de hospedagem   
define('HOSPEDAGEM', $_SERVER['HTTP_HOST'] == 'localhost' ? "Local" : "Remoto");

if (HOSPEDAGEM == "Local") {
    #BANCO DE DADOS LOCAL
    define("CONF_BD",[
        "SERVIDOR" => "localhost",
        "BANCO" => "adminlte",
        "USUARIO" => "root",
        "SENHA" => "",
        "CHARSET" => "UTF8"
    ]);
} else {
    #BANCO DE DADOS REMOTO
    define("CONF_BD",[
        "SERVIDOR" => "{$protocolo}{$_SERVER['HTTP_HOST']}",
        "BANCO" => "adminlte",
        "USUARIO" => "root",
        "SENHA" => "",
        "CHARSET" => "UTF8"
    ]);
}

#E-MAIL CONFIG
define("CONF_MAIL", [
    "HOST" => "quimicosunificados.ddns.net",//"smtp-auth.no-ip.com",
    "PORTA" => "587",
    "USUARIO" => "admin@quimicosunificados.ddns.net",
    "SENHA" => "Mudar@123",
    "MODO" => "tls",
    "REMETENTE" => "Químicos Unificados",
    "EMAIL" => "quimicos.backup@gmail.com"
]);

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
