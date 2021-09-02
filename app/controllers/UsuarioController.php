<?php

namespace app\controllers;

use app\core\Controller;
use app\util\UtilService;
use app\models\service\Service;
use app\models\service\UsuarioService;
use app\classes\Breadcrumb;
use app\core\Flash;

class UsuarioController extends Controller
{
    private $tabela = "usuario";
    private $campo = "id_usuario";

    public function __construct()
    {
        $this->setPage("Usuários");
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

    public function index()
    {
        $breadcrumb = new Breadcrumb();
        $dados["breadcrumb"] = $breadcrumb->addBreadcrumb();
        $dados["usuarios"] = Service::lista("usuario");
        $dados["view"] = "Usuario/usuario";
        $this->load("template", $dados);
    }

    public function cadastro()
    {
        $breadcrumb = new Breadcrumb();
        $dados["breadcrumb"] = $breadcrumb->addBreadcrumb();
        $dados["estados"] = Service::lista("estados");
        $dados["niveis"] = Service::lista("nivel");
        $dados["usuario"] = Flash::getForm();
        $dados["view"] = "Usuario/cadastro";
        $this->load("template", $dados);
    }

    public function editar($id_usuario = null)
    {
        $usuario = Service::get($this->tabela, $this->campo, $id_usuario);
        if (!$usuario) {
            Flash::setMsg("Parâmetro não informado", 3);
            $this->redirect(URL_BASE . "usuario");
        } else {
            $breadcrumb = new Breadcrumb();
            $dados["breadcrumb"] = $breadcrumb->addBreadcrumb();
            $dados["estados"] = Service::lista("estados");
            $dados["niveis"] = Service::lista("nivel");
            $dados["usuario"] = $usuario;
            $dados["view"] = "Usuario/cadastro";
            $this->load("template", $dados);
        }
    }

    public function salvar()
    {
        $usuario = new \stdClass();
        if ($_POST["id_usuario"] != null) {
            $usuario->id_usuario =     trim(strip_tags(filter_input(INPUT_POST, "id_usuario")));
        }
        if ($_POST["senha"]) {
            $usuario->senha =       password_hash(trim(strip_tags(filter_input(INPUT_POST, "senha"))), PASSWORD_DEFAULT);
        }
        $usuario->usuario =         trim(strip_tags(filter_input(INPUT_POST, "usuario")));
        $usuario->nascimento =      trim(strip_tags(filter_input(INPUT_POST, "nascimento")));
        $usuario->cpf =             trim(strip_tags(filter_input(INPUT_POST, "cpf")));
        $usuario->cep =             trim(strip_tags(filter_input(INPUT_POST, "cep")));
        $usuario->endereco =        trim(strip_tags(filter_input(INPUT_POST, "endereco")));
        $usuario->numero =          trim(strip_tags(filter_input(INPUT_POST, "numero")));
        $usuario->complemento =     trim(strip_tags(filter_input(INPUT_POST, "complemento")));
        $usuario->bairro =          trim(strip_tags(filter_input(INPUT_POST, "bairro")));
        $usuario->cidade =          trim(strip_tags(filter_input(INPUT_POST, "cidade")));
        $usuario->uf_sigla =        trim(strip_tags(filter_input(INPUT_POST, "uf_sigla")));
        $usuario->id_nivel =        trim(strip_tags(filter_input(INPUT_POST, "id_nivel")));
        $usuario->telefone =        trim(strip_tags(filter_input(INPUT_POST, "telefone")));
        $usuario->celular =         trim(strip_tags(filter_input(INPUT_POST, "celular")));
        $usuario->email =           trim(strip_tags(filter_input(INPUT_POST, "email")));


        Flash::setForm($usuario);
        if (UsuarioService::salvar($usuario, $this->campo, $this->tabela)) {
            $this->redirect(URL_BASE . "usuario");
        } else {
            if (!$usuario->id_usuario) {
                $this->redirect(URL_BASE . "usuario/cadastro");
            } else {
                $this->redirect(URL_BASE . "usuario/editar/" . $usuario->id_usuario);
            }
        }
    }

    public function excluir($id_usuario)
    {
        if ($id_usuario > 1) {
            Service::excluir($this->tabela, $this->campo, $id_usuario);
        } else {
            Flash::setMsg("Este usuário não pode ser excluído", 3);
        }
        $this->redirect(URL_BASE . "usuario");
    }

    public function perfil()
    {
        //i($_SESSION);
        $breadcrumb = new Breadcrumb();
        $dados["breadcrumb"] = $breadcrumb->addBreadcrumb();
        $dados["view"] = "Usuario/perfil";
        $this->load("template", $dados);
    }
}
