<?php
namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\ItemService;

class ItemValidacao{
    public static function salvar($item){
        $validacao = new Validacao();
        
        $validacao->setData("id_pedido", $item->id_pedido );
        $validacao->setData("id_produto", $item->id_produto );
        $validacao->setData("qtde", $item->qtde);
        $validacao->setData("valor", $item->valor);
        
        //fazendo a validação
        $validacao->getData("id_pedido")->isVazio();
        $validacao->getData("id_produto")->isVazio();
        $validacao->getData("qtde")->isVazio();
        $validacao->getData("valor")->isVazio();
        if($item->id_pedido && $item->id_produto){
            $item = ItemService::getItem($item->id_pedido, $item->id_produto);
            if($item){
                $validacao->getData("id_produto")->isUnico(1, "Este produto já foi inserido neste pedido");
            }
        }
        return $validacao;
        
    }
}

