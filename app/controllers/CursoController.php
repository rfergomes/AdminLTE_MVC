<?php

namespace app\controllers;

use app\core\Controller;
use app\util\UtilService;

class CursoController extends Controller {

    public function __construct() {
        $this->setTitle("EAD - Lista de Cursos");
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
        $dados["view"] = "Curso/curso";
        $this->load("template", $dados);
    }
    
    public function cadastro() {
        $dados["view"] = "Curso/cadastro";
        $this->load("template", $dados);
    }

}
