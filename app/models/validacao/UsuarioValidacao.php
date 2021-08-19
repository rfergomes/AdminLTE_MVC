<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class UsuarioValidacao {

    public static function salvar($usuario) {
        $validacao = new Validacao();

        $validacao->setData("usuario", $usuario->usuario);
        $validacao->setData("cpf", $usuario->cpf);
        $validacao->setData("cep", $usuario->cep);
        $validacao->setData("bairro", $usuario->bairro);
        $validacao->setData("cidade", $usuario->cidade);
        $validacao->setData("uf_sigla", $usuario->uf_sigla);
        $validacao->setData("email", $usuario->email);
        
        //fazendo a validação
        $validacao->getData("usuario")->isVazio();
        $validacao->getData("cep")->isVazio();
        $validacao->getData("bairro")->isVazio();
        $validacao->getData("cidade")->isVazio();
        $validacao->getData("uf_sigla")->isVazio();
        $validacao->getData("cpf")->isVazio()->isCPF();

        if ($usuario->email || $usuario->cpf) {
            $email = Service::get("usuario", "email", $usuario->email);
            $cpf = Service::get("usuario", "cpf", $usuario->cpf);
            if ($email && $usuario->id_usuario != $email->id_usuario) {
                $validacao->getData("email")->isUnico(1);
            }
            if ($cpf && $usuario->id_usuario != $cpf->id_usuario) {
                $validacao->getData("cpf")->isUnico(1);
            }
        }
        return $validacao;
    }

}
