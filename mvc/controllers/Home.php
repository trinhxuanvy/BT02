<?php
class Home extends Controller {
  function index() {
    $student = $this->model("StudentModel");

    $this->view("index",["student"=>$student->getStudent()]);
  }

  function show() {
    $student = $this->model("StudentModel");

    $std = $student->setStudent($student->getStudent());
    $style = "color: 'red'; font-size: '50px'";
    $this->view("index", ["student"=>$std, "style"=>$style]);
  }
}
?>