<?php
class ClubModel extends Database {
  public function getClub() {
    $query = "SELECT * FROM club";
    return mysqli_query($this->con, $query);
  }
}
?>