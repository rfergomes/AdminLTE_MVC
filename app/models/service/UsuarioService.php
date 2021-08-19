<?php

namespace app\models\service;

use app\util\UtilService;
use app\models\validacao\UsuarioValidacao;
use app\models\service\Service;

class UsuarioService {

    public static function salvar($usuario, $campo, $tabela) {
        global $config_upload;
        $validacao = UsuarioValidacao::salvar($usuario);
        if ($validacao->qtdeErro() <= 0) {
            /// fazendo o upload do arquivo
            if ($_FILES["arquivo"]["name"]) {
                $usuario->foto = UtilService::upload("arquivo", $config_upload);
                if (!$usuario->foto) {
                    return false;
                }
            }
        }
        return Service::salvar($usuario, $campo, $validacao->listaErros(), $tabela);
    }

}
