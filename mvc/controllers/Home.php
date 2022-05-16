<?php
class Home extends Controller {
  function index() {
    $student = $this->model("StudentModel");
    $this->view("index");
  }

  function show() {
    $coachModel = $this->model("CoachModel");
    $coachs = $coachModel->getCoach();
    $this->view("index", ["data"=>$coachs]);
  }
}
?>