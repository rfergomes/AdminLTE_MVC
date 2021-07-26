<?php
namespace app\core;

use Exception;

class ValidacaoItem{
    private $valor;
    private $campo;
    private $erro;
    private $codigo_erro;
    
    public function __construct($valor = null, $campo=null){
        $this->setValor($valor);
        $this->setCampo($campo);
       
    }
    
    public function qtdeErro(){
        if($this->erro){
            return count($this->erro);
        }
        return 0;
    }
    
    public function getListaErro(){
        return $this->erro;
    }
    
    public function isVazio($msg=null, $erro = Validacao::ERRO_VAZIO){
        $valor = trim($this->valor," \n\t\r");
        if(!strlen($valor) >0){
            if($msg==null){
                $msg = "O campo " . $this->campo ." não pode ficar vazio";
            }
            $this->erro[$erro]          = $msg;
            $this->codigo_erro[$erro]   = true;
        }        
        return $this;
    }
    
    public function isNumero($msg=null, $erro = Validacao::ERRO_NUMERO){
        $valor = trim($this->valor," \n\t\r");
        $valor = str_replace(",", ".", $valor);
        if(!is_numeric($valor)){
            if($msg==null){
                $msg = "O campo " . $this->campo ." precisar ser um número";
            }
            $this->erro[$erro]          = $msg;
            $this->codigo_erro[$erro]   = true;
        }
        return $this;
    }
    
    public function isMaximo($max, $msg=null, $erro = Validacao::ERRO_MAXIMO){
        if(is_int($max)){
            if(strlen($this->valor) > $max){
                if($msg==null){
                    $msg = "O campo " . $this->campo ." só pode ter no máximo " . $max ." caracteres";
                }
                $this->erro[$erro]          = $msg;
                $this->codigo_erro[$erro]   = true;
            }
        }else{
            throw new Exception("Você precisa definir um valor inteiro para a função de Validação Máximo ");
        }
        return $this;
    }
    
    public function isMinimo($min, $msg=null, $erro = Validacao::ERRO_MINIMO){
        if(is_int($min)){
            if(strlen($this->valor) < $min){
                if($msg==null){
                    $msg = "O campo " . $this->campo ." deve ter no mínimo " . $min ." caracteres";
                }
                $this->erro[$erro]          = $msg;
                $this->codigo_erro[$erro]   = true;
            }
        }else{
            throw new Exception("Você precisa definir um valor inteiro para a função de Validação Minimo ");
        }
        return $this;
    }    
    
    public function isData($opcao, $msg=null, $erro = Validacao::ERRO_DATA){
        $data = extrair_data($this->valor, $opcao);
        if(!is_numeric($data[0]) || !is_numeric($data[1]) || !is_numeric($data[2])){
            if($msg==null){
                $msg = "O campo " . $this->campo ." não é uma data válida ";
            }
            $this->erro[$erro]          = $msg;
            $this->codigo_erro[$erro]   = true;
            return $this;
        }
        
        if(!checkdate($data[1], $data[0], $data[2])){
            if($msg==null){
                $msg = "O campo " . $this->campo ." não é uma data válida ";
            }
            $this->erro[$erro]          = $msg;
            $this->codigo_erro[$erro]   = true;           
        }
        return $this;
    }
    
    public function isEmail($msg=null, $erro = Validacao::ERRO_EMAIL){
        if(!validaEmail($this->valor)){
            if($msg==null){
                $msg = "O campo " . $this->campo ." precisa ser um email válido ";
            }
            $this->erro[$erro]          = $msg;
            $this->codigo_erro[$erro]   = true;
       }
       
        return $this;
    }
    public function isCPF($msg=null, $erro = Validacao::ERRO_CPF){
        if(!validaCPF($this->valor)){
            if($msg==null){
                $msg = "O campo " . $this->campo ." precisa ser um CPF válido ";
            }
            $this->erro[$erro]          = $msg;
            $this->codigo_erro[$erro]   = true;
        }
        
        return $this;
    }
    
    public function isCNPJ($msg=null, $erro = Validacao::ERRO_CNPJ){
        if(!validaCNPJ($this->valor)){
            if($msg==null){
                $msg = "O campo " . $this->campo ." precisa ser um CNPJ válido ";
            }
            $this->erro[$erro]          = $msg;
            $this->codigo_erro[$erro]   = true;
        }
        
        return $this;
    }
    
    public function isUnico($qtde, $msg=null, $erro = Validacao::ERRO_UNICO){
        if($qtde>0){
            if($msg==null){
                $msg = "Já existe um registro com este " . $this->campo ;
            }
            $this->erro[$erro]          = $msg;
            $this->codigo_erro[$erro]   = true;
        }
        
        return $this;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }
    
    public function getValor(){
        return $this->valor;
    }
    public function setCampo($campo){
        $this->campo = $campo;
    }
    
    public function getCampo(){
        return $this->campo;
    }
    
}

