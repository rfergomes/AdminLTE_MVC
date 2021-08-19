<?php

namespace app\controllers;

use app\core\Controller;
use app\util\UtilService;
use app\models\service\EmailService;
use app\core\Flash;
use app\models\service\Service;

class LoginController extends Controller
{

    public function __construct()
    {
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

    public function index()
    {
        $dados["view"] = "Login/login";
        $this->load("template_Login", $dados);
    }

    public function logar()
    {
        $email = isset($_POST["email"]) ? trim(strip_tags(filter_input(INPUT_POST, "email"))) : NULL;
        $senha = isset($_POST["senha"]) ? trim(strip_tags(filter_input(INPUT_POST, "senha"))) : NULL;
        $lembrar = isset($_POST["lembrar"]) ? trim(strip_tags(filter_input(INPUT_POST, "lembrar"))) : NULL;

        Flash::setForm($_POST);
        if (Service::logar("email", $email, $senha, "usuario")) {
            $this->redirect(URL_BASE . "login/resultado");
        } else {
            $this->redirect(URL_BASE . "login");
        }
    }

    public function resultado()
    {
        $this->usuario = UtilService::getUsuario();
        if (!$this->usuario) {
            $this->redirect(URL_BASE . "login");
            exit;
        }
        $this->redirect(URL_BASE);
    }

    public function esqueci()
    {
        $dados["view"] = "Login/esqueci";
        $this->load("template_Login", $dados);
    }

    public function recuperar($token, $id_usuario)
    {
        $dados["token"] = $token;
        $dados["id_usuario"] = $id_usuario;
        $dados["view"] = "Login/recuperar";
        $this->load("template_Login", $dados);
    }

    public function recover()
    {
        if (isset($_POST)) {
            $email = $_POST["email"];
            $nome = "Rodrigo Lima";
            $id_usuario = 123;
            $token = intval("0" . rand(1, 9) . rand(2, 9) . rand(3, 9) . rand(4, 9) . rand(5, 9));

            if (EmailService::enviar($nome, $email, "Recuperação de Senha", "Click no link para recuperar sua senha: <a href='" . URL_BASE . "login/recuperar/$token/$id_usuario'>Nova Senha</a>")) {
                Flash::setMsg("Enviamos um e-mail com instruções para recuperar sua senha. Verifique seu e-mail.", 2);
            } else {
                Flash::setMsg("Não foi possível recuperar sua senha. Tente novamente mais tarde ou entre em contato com o <a href='mailto:webmaster@quimicosunificados.ddns.net?subject=Erro ao recuperar senha'>Administrador</a> do Sistema.", -1);
            }
            $this->redirect(URL_BASE . "login");
        }
    }

    public function novaSenha()
    {
        if (isset($_POST)) {
            i($_POST);
        }
    }

    public function registrar()
    {
        $dados["view"] = "Login/registrar";
        $this->load("template_Login", $dados);
    }

    public function logoff()
    {
        unset($_SESSION[SESSION_LOGIN]);
        session_destroy();
        $this->redirect(URL_BASE . "login");
    }
}
