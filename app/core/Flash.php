<?php
namespace app\core;

class Flash{
    public static function setMsg($msg, $tipo=1){
        //Tipo: 1 - sucesso / -1 erro / 2 info / 3 alerta
        $titulo = "Sucesso!";
        $classe = "alert-success alert-dismissible";
        $icone  = "fas fa-check";
        if($tipo==-1){
            $titulo = "Atenção!";
            $classe = "alert-danger alert-dismissible"; 
            $icone  = "fas fa-ban";
        }else if($tipo==2){
            $titulo = "Informação!";
            $classe="alert-info alert-dismissible";
            $icone  = "fas fa-info";
        }else if($tipo==3){
            $titulo = "Alerta!";
            $classe="alert-warning alert-dismissible";
            $icone  = "fas fa-exclamation-triangle";
        }
        
        $resultado = (object) array(
            "tipo" => $tipo,
            "titulo" => $titulo,
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

