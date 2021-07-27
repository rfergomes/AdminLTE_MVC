<?php

use app\core\Excecao;

session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once 'app/core/Core.php';
require_once 'app/helper/helper.php';
require_once 'app/helper/datahora.php';
require_once 'app/helper/numero.php';
require_once 'app/helper/rede.php';
//require_once 'config/config.php';
require_once 'vendor/autoload.php';
date_default_timezone_set(TIMEZONE);

if (!file_exists('.htaccess')) {
    $htaccesswrite = "RewriteEngine On\r\nOptions All -Indexes\r\n\r\n# Redirecionamento WWW\r\nRewriteCond %{HTTP_HOST} !^www\. [NC]\r\nRewriteRule ^ %{ENV:PROTO}://www.%{HTTP_HOST}%{REQUEST_URI} [L,R=301]\r\n\r\n# Redirecionamento HTTPS\r\nRewriteCond %{HTTP:X-Forwarded-Proto} !https\r\nRewriteCond %{HTTPS} off\r\nRewriteRule ^ %{ENV:PROTO}://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]\r\n\r\n# Reescrevendo URL\r\nRewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteCond %{REQUEST_FILENAME} !-d\r\nRewriteRule ^(.*)$ index.php/$1 [QSA,L]";
    $htaccess = fopen('.htaccess', "w");
    fwrite($htaccess, str_replace("'", '"', $htaccesswrite));
    fclose($htaccess);
}

try {
    $core = new Core;
    $core->run();
} catch (Exception $e) {
    $erro = new Excecao($e);
    $erro->mostrar();
} catch (Error $e) {
    $erro = new Excecao($e);
    $erro->mostrar();
}
