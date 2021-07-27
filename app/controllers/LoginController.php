<?php

namespace app\controllers;

use app\core\Controller;
use app\util\UtilService;

class LoginController extends Controller {

    public function __construct() {
        $this->setTitle("Login");
        $this->setDescription("Esse é o nosso site de MVC");
        $this->setKeywords("mvc completo, curso de mvc, mjailton");
        $this->setDir("Login");
        /*
        $this->usuario = UtilService::getUsuario();
        if (!$this->usuario) {
            $this->redirect(URL_BASE . "login");
            exit;
        }
        */
    }

    public function index() {
        $dados["view"] = "Login/login";
        $this->load("template_Login", $dados);
    }
    
    public function logar() {
        $this->redirect(URL_BASE);
    }
    
    public function esqueci() {
        $dados["view"] = "Login/esqueci";
        $this->load("template_Login", $dados);
    }

    public function recuperar() {
        $dados["view"] = "Login/recuperar";
        $this->load("template_Login", $dados);
    }
    
    public function recover(){
        if(isset($_POST)){
            $email = $_POST["email"];
            echo "<pre>";
            print_r(EmailService::enviar("rfergomes@gmail.com","Enviando e-mail teste","PHPMailer teste"));
        }
    }

    public function registrar() {
        $dados["view"] = "Login/registrar";
        $this->load("template_Login", $dados);
    }
    
    public function logout() {
        $this->redirect(URL_BASE."login");
    }

}
