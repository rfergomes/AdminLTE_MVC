<?php
namespace app\core;

use Exception;

class Excecao{
    private $mensagem;
    private $codigo;
    
    public function __construct($objException = Exception::class){
        $this->codigo = $objException->getCode();
        $this->mensagem = $objException->getMessage();
    }   
   
    
    public function mostrar(){
        $msg_erro = $this->mensagem;
        if(file_exists("app/views/inc/erro/".$this->codigo .".php")){
            require_once "app/views/inc/erro/".$this->codigo .".php";
        }else{
            require_once "app/views/inc/erro/500.php";
        }
    }
}

