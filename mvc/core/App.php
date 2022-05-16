<?php
class App {
  protected $controller = "Home";
  protected $action = "index";
  protected $params = [];

  function __construct() {
    $url = $this->handleURL();
    print_r($url);
    
    if (file_exists("./mvc/controllers/".$url[3].".php")) {
      $this->controller = $url[3];
      unset($url[3]);
    }

    require_once "./mvc/controllers/". $this->controller .".php";
    $this->controller = new $this->controller;

    if (isset($url[4])) {
      if (method_exists($this->controller, $url[4])) {
        $this->action = $url[4];
        
      }
      unset($url[4]);
    }

    $this->params = $url ? array_values($url) : [];

    call_user_func_array([$this->controller, $this->action], $this->params);
  }

  function handleURL() {
    $path = $_SERVER["REQUEST_URI"];

    if (isset($path)) {
      $filterPath = filter_var(trim($path), FILTER_DEFAULT, "/");
      $arrPath = explode("/", $filterPath);
      
      return $arrPath;
    }
  }
}
?>