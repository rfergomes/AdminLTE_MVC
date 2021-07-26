<?php
namespace app\models\service;

use app\models\validacao\EntidadeValidacao;

class EntidadeService{
    public static function salvar($objeto, $campo, $tabela){
        $validacao = EntidadeValidacao::salvar($objeto);
        return Service::salvar($objeto, $campo, $validacao->listaErros(), $tabela);
    }
    
}

