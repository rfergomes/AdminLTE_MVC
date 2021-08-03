<?php

namespace app\controllers;

use app\core\Controller;
use app\util\UtilService;

class UsuarioController extends Controller {

    public function __construct() {
        $this->setTitle("EAD - Usuários");
        $this->setDescription("Sistema MVC - Usuários");
        $this->setKeywords("mvc completo, curso de mvc, mjailton");
        $this->setDir("Usuario");
        
        $this->usuario = UtilService::getUsuario();
        if (!$this->usuario) {
            $this->redirect(URL_BASE . "login");
            exit;
        }
        
    }

    public function index() {
        $dados["view"] = "Usuario/usuario";
        $this->load("template", $dados);
    }
    
    public function cadastro() {
        $dados["view"] = "Usuario/cadastro";
        $this->load("template", $dados);
    }

}
