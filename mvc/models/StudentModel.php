<?php
class StudentModel extends Database {
  public function getStudent() {
    return $this->getCollection("startup_log");
  }

  public function setStudent($student) {
    return "Hello ".$student;
  }
}
?>