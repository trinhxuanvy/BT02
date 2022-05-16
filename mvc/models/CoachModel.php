<?php
class CoachModel extends Database {
  public function getCoach() {
    $query = "SELECT * FROM coach";
    return mysqli_query($this->connection, $query);
  }
}
?>