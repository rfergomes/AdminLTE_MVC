<?php

namespace app\controllers;

use app\core\Controller;
use app\util\UtilService;
use app\classes\Breadcrumb;

class HomeController extends Controller {

    public function __construct() {
        $this->setPage("Dashboard");
        $this->setTitle($this->getPage());
        $this->setDescription("Página Home do Sistema");
        $this->setKeywords("mvc completo, home, dashboard");
        $this->setDir("");
        
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
        $dados["view"] = "home";
        $this->load("template", $dados);
    }
}
