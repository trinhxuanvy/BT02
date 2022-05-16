<?php
class PlayerModel extends Database {
  public function getPlayer() {
    $query = "SELECT * FROM player";
    return mysqli_query($this->con, $query);
  }
}
?>