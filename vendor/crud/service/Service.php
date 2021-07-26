<?php
namespace app\crud\service;

use app\core\Flash;
use app\models\dao\Dao;

class Service{
    public static function lista($tabela){
        $dao = new Dao();
        return $dao->lista($tabela);
    }
    
    public static function get($tabela, $campo, $valor){
        $dao = new Dao();
        return $dao->get($tabela, $campo, $valor);
    }
    
    public static function salvar($objeto, $campo, array $erros, $tabela){
        $resultado = false;
        if(!$erros){
            $dao = new Dao();
            if($objeto->$campo){
                $resultado = $dao->editar(objToArray($objeto), $campo, $tabela);
                if($resultado){
                    Flash::setMsg("Registro Alterado com Sucesso !");
                }else{
                    Flash::setMsg("Não foi possível Alterar o registro",-1);
                }
            }else{
                $resultado = $dao->inserir(objToArray($objeto), $tabela);
                if($resultado){
                    Flash::setMsg("Registro Inserido com Sucesso !");
                }else{
                    Flash::setMsg("Não foi possível inserir o registro",-1);
                }
            }
            Flash::limpaForm();
        }else{
            Flash::limpaErro();
            Flash::setErro($erros);
        }
        return $resultado;
    }
    
    public static function excluir($tabela, $campo, $valor){
        $dao = new Dao();
        $excluir = $dao->excluir($tabela, $campo, $valor);
        if($excluir){
            Flash::setMsg("Registro Exluído com Sucesso !");
        }else{
            Flash::setMsg("Não foi possível excluir o registro",-1);
        }
    }
}

