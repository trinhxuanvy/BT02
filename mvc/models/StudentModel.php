<?php
class StudentModel extends Database {
  public function getStudent() {
    foreach($this->getCollection("user") as $a) {
      echo $a["name"];
    }
    return $this->getCollection("user");
  }

  public function setStudent($student) {
    return "Hello ".$student;
  }
}
?>