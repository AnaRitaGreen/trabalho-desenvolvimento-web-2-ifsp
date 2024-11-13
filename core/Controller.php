<?php
  class Controller {
    public function __construct(){
      global $config;
    }

    public function loadView($viewName, $viewData = array()){
      extract($viewData);
      include "views/$viewName.php";
    }

    public function loadTemplate($templateName, $viewName, $viewData = array()){
      extract($viewData);
      include "template/$templateName.php";
    }
    
  }
?>