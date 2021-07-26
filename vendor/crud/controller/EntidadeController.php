<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\Service;

class EntidadeController extends Controller{
    private $tabela = "entidade";
    private $campo  = "id_entidade";
    public function index(){
       $dados["lista"] =  Service::lista($this->tabela);
       $dados["view"] = "Entidade/Index";
       $this->load("template", $dados);
    }
    
    public function create(){ 
        $dados["entidade"] = Flash::getForm();
        $dados["view"] = "Entidade/Create";
        $this->load("template", $dados);
    }
    
    public function edit($id){
        $entidade = Service::get($this->tabela,$this->campo, $id);        
        if(!$entidade){
            $this->redirect(URL_BASE ."entidade/index");
        }
        $dados["entidade"] = $entidade;
        $dados["view"] = "Entidade/Create";
        $this->load("template", $dados);
    }
    
    public function salvar(){
        $entidade                    = new \stdClass();
        $entidade->id_entidade       = $_POST['id_entidade'];
        $entidade->entidade 		    = $_POST['entidade'];
        
        Flash::setForm($entidade);
        if(Service::salvar($entidade,$this->campo, $this->tabela)){
            $this->redirect(URL_BASE ."entidade");
        }else{
            if(!$entidade->id_entidade){
                $this->redirect(URL_BASE ."entidade/create");
            }else{
                $this->redirect(URL_BASE ."entidade/edit/".$entidade->id_entidade);
            }
        }
    }
    
    public function excluir($id){
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE ."entidade/index");
    }
}

