<?php
namespace app\core;

class Validacao{
    private $atributos;
    private $itens;
    private $erros;
    
    //Constantes com numeração de erros;
    const ERRO_VAZIO  = 1;
    const ERRO_NUMERO = 2;
    const ERRO_MAXIMO = 3;
    const ERRO_MINIMO = 4;
    const ERRO_DATA   = 5;
    const ERRO_EMAIL  = 6;
    const ERRO_CPF    = 7;
    const ERRO_CNPJ   = 8;
    const ERRO_UNICO  = 9;    
    
    
    public function __construct(){
        $this->atributos = array();
        $this->itens = array();
        $this->erros = array();
    }
    
    public function setData($chave, $valor){
        $this->atributos[$chave] = $valor;
        $this->itens[$chave] = new ValidacaoItem($valor, $chave);
    }
    
    public function getData($chave){
        if(isset($this->itens[$chave])){
            return $this->itens[$chave];
        }else{
            return new ValidacaoItem();
        }
    }   
    
    public function qtdeErro(){
        $qtde = 0;
        foreach ($this->itens as $obj){
            $qtde += $obj->qtdeErro();
        }
        
        return $qtde;     
        
    }
    
    public function listaErros(){
        foreach ($this->itens as $obj){
            if($obj->getListaErro()){
                foreach($obj->getListaErro() as $erro){
                    $this->erros[] = $erro;
                }
            }
        }        
        return $this->erros;        
    }
    public function getAtributos(){
        return $this->atributos;
    }
    
}

