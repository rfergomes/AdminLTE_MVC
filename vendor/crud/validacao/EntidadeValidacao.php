<?php
namespace app\models\validacao;

use app\core\Validacao;

class EntidadeValidacao{
    public static function salvar($entidade){
        $validacao = new Validacao();
        
        $validacao->setData("entidade", $entidade->entidade);
        
        //fazendo a validação
        $validacao->getData("entidade")->isVazio();        
        return $validacao;
        
    }
}

