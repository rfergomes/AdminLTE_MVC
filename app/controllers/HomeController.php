<?php

namespace app\controllers;

use app\core\Controller;
use app\util\UtilService;

class HomeController extends Controller {

    public function __construct() {
        $this->setTitle("Dashboard");
        $this->setDescription("Página Home do Sistema");
        $this->setKeywords("mvc completo, home, dashboard");
        $this->setDir("");
        /*
        $this->usuario = UtilService::getUsuario();
        if (!$this->usuario) {
            $this->redirect(URL_BASE . "login");
            exit;
        }
        */
    }

    public function index() {
        $dados["view"] = "home";
        $this->load("template", $dados);
    }
}
