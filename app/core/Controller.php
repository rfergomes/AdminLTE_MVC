<?php
namespace app\core;

use function Composer\Autoload\includeFile;

class Controller{

    private $Dir;
    private $Page;
    private $Title;
    private $Description;
    private $Keywords;

    public function getDir() { return $this->Dir; }
    public function setDir($Dir) { $this->Dir = $Dir; }
    public function getPage() { return $this->Page; }
    public function setPage($Page) { $this->Page = $Page; }
    public function getTitle() { return $this->Title; }
    public function setTitle($Title) { $this->Title = TITULO_SITE.$Title; }
    public function getDescription() { return $this->Description; }
    public function setDescription($Description) { $this->Description = $Description; }
    public function getKeywords() { return $this->Keywords; }
    public function setKeywords($Keywords) { $this->Keywords = $Keywords; }

     public function load($viewName, $viewData=array()){
       extract($viewData); 
       include "app/views/" . $viewName .".php";
   }
   
   public function verMsg($view=null){
       $view = ($view) ? $view : "inc/msg";
       $msg = Flash::getMsg();
       if($msg){
        include "app/views/".$view .".php";
       }
   }
   
   public function verErro($view=null){
       $view = ($view) ? $view : "inc/erros";
       $erros = Flash::getErro();
       if($erros){
           include "app/views/".$view .".php";
       }
   }
   
   public function redirect($view) {
       header('Location:' . $view);
       exit;
   }
   
   public function incluir($view){
       include "app/views/".$view .".php";
   }

   #Adiciona características específicas no head
    public function addHead() {
        if (file_exists(DIRREQ . "app/views/{$this->getDir()}/Head.php")) {
            include(DIRREQ . "app/views/{$this->getDir()}/Head.php");
        }
    }

    #Adiciona características específicas no header
    public function addHeader() {
        if (file_exists(DIRREQ . "app/views/{$this->getDir()}/Header.php")) {
            include(DIRREQ . "app/views/{$this->getDir()}/Header.php");
        }
    }

    #Adiciona características específicas no main
    public function addMain() {
        if (file_exists(DIRREQ . "app/views/{$this->getDir()}/Main.php")) {
            include(DIRREQ . "app/views/{$this->getDir()}/Main.php");
        }
    }

    #Adiciona características específicas no footer
    public function addFooter() {
        if (file_exists(DIRREQ . "app/views/{$this->getDir()}/Footer.php")) {
            include(DIRREQ . "app/views/{$this->getDir()}/Footer.php");
        }
    }
}


   

