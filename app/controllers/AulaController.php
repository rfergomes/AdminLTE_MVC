<?php

namespace app\controllers;

use app\core\Controller;
use app\util\UtilService;

class AulaController extends Controller {

    public function __construct() {
        $this->setTitle("EAD - Lista de Aulas");
        $this->setDescription("Esse é o nosso site de MVC");
        $this->setKeywords("mvc completo, curso de mvc, mjailton");
        $this->setDir("Aula");
        /*
        $this->usuario = UtilService::getUsuario();
        if (!$this->usuario) {
            $this->redirect(URL_BASE . "login");
            exit;
        }
        */
    }

    public function index() {
        $dados["view"] = "Aula/aula";
        $this->load("template", $dados);
    }
    
    public function cadastro() {
        $dados["view"] = "Aula/cadastro";
        $this->load("template", $dados);
    }

}
