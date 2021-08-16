<?php

namespace app\classes;

class Breadcrumb {

    #Cria os breadcrumbs do site
    public function addBreadcrumb() {
        $Contador = count($this->parseUrl());
        $ArrayLink[0] = '';
        $link = "<ol class='breadcrumb float-sm-right'>";
        for ($I = 0; $I < $Contador; $I++) {
            $ArrayLink[0] .= $this->parseUrl()[$I];

            if($Contador - 1 <= 0){
                $link .= "<li class='breadcrumb-item'><a href='#'>Home</a></li>";
            }elseif ($I < $Contador - 1) {
                $link .= "<li class='breadcrumb-item active'><a href='" . URL_BASE . $ArrayLink[0] . "'>" . ucfirst($this->parseUrl()[$I]) . "</a></li>";
            }else{
                $link .= "<li class='breadcrumb-item active'>". ucfirst($this->parseUrl()[$I])."</li>";
            }  
        }
        $link .= "</ol> ";
        return $link;
    }

    private function parseUrl() {
        return explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);
    }
}
