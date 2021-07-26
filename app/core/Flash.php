<?php
namespace app\core;

class Flash{
    public static function setMsg($msg, $tipo=1){
        //1 - sucesso / -1 erro / 2 info
        $classe = "sucesso";
        $icone  = "fa-check";
        if($tipo==-1){
            $classe = "erro";
            $icone  = "fa-exclamation-triangle";
        }else if($tipo==2){
            $classe="info";
            $icone  = "fa-exclamation-circle";
        }
        
        $resultado = (object) array(
            "tipo" => $tipo,
            "msg"  => $msg,
            "classe"=> $classe,
            "icone" => $icone
        );
        
        $_SESSION["msg"] = $resultado;        
    }
    
    public static function getMsg(){
        $msg = (isset($_SESSION["msg"])) ? $_SESSION["msg"]: null;
        if($msg){
            unset($_SESSION["msg"]);
        }
        return $msg;
    }
    
    public static function limpaMsg(){
        unset($_SESSION["msg"]);
    }
    
    public static function isMsg(){
        return (isset($_SESSION["msg"])) ? true: false;
    }
    
    //Erros
    public static function setErro(array $erros ){
        $_SESSION["erro"] = $erros;
    }
    
    public static function getErro(){
        $erro = (isset($_SESSION["erro"])) ? $_SESSION["erro"]: null;
        if($erro){
            unset($_SESSION["erro"]);
        }
        return $erro;
    }
    
    public static function limpaErro(){
        unset($_SESSION["erro"]);
    }
    
    public static function isErro(){
        return (isset($_SESSION["erro"])) ? true: false;
    }
    
    
    //Formulário
    public static function setForm($form ){
        $_SESSION["form"] = $form;
    }
    
    public static function getForm(){
        $form = (isset($_SESSION["form"])) ? $_SESSION["form"]: null;
        if($form){
            unset($_SESSION["form"]);
        }
        return $form;
    }
    
    public static function limpaForm(){
        unset($_SESSION["form"]);
    }
    
    public static function isForm(){
        return (isset($_SESSION["form"])) ? true: false;
    }
}

