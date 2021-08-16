<?php

namespace app\controllers;

use app\core\Controller;
use app\util\UtilService;
use app\models\service\Service;
use app\classes\Breadcrumb;

class UsuarioController extends Controller {

    public function __construct() {
        $this->setPage("EAD - Usuários");
        $this->setTitle($this->getPage());
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
        $breadcrumb = new Breadcrumb();
        $dados["breadcrumb"] = $breadcrumb->addBreadcrumb();
        $dados["usuario"] = $this->usuario;
        $dados["usuarios"] = Service::lista("usuario");
        $dados["view"] = "Usuario/usuario";
        $this->load("template", $dados);
    }
    
    public function cadastro() {
        $dados["view"] = "Usuario/cadastro";
        $this->load("template", $dados);
    }

}
