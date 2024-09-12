<?php

class Controller{
    public function LoadView($viewName, $viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }

    public function LoadTemplate($viewName, $viewData = array()){
        require 'view/template.php';
    }

    public function LoadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
}