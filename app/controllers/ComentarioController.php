<?php

namespace app\controllers;

use app\core\Controller;
use app\util\UtilService;

class ComentarioController extends Controller {

    public function __construct() {
        $this->setTitle("EAD - Comentários");
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
        $dados["view"] = "Comentario/comentario";
        $this->load("template", $dados);
    }
    
    public function mensagem() {
        $dados["view"] = "Comentario/mensagem";
        $this->load("template", $dados);
    }

}
