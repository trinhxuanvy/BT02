<?php 
class Database {
  public $connection;
  public $serverName = "localhost:8080";
  public $username = "root";
  public $password = "root";
  public $dbName = "football";

  function _construct() {
    $this->connection = new mysqli($serverName, $username, $password);
    mysqli_select_db($this->connection, $this->dbName);
    mysqli_query($this->connection, "SET NAMES 'utf8'");
  }
}
?>