<?php
class Controller {
  public function model($modelName) {
    require_once "./mvc/models/".$modelName.".php";

    return new $modelName;
  }

  public function view($viewName, $data=[]) {
    require_once "./mvc/views/pages/".$viewName.".php";
  }
}
?>