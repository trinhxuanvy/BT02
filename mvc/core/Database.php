<?php
require('vendor/autoload.php');
class Database { 
    private $db;

    private function connect () {
      $connection = new MongoDB\Client("mongodb://localhost:27017");
      $this->db = $connection->local;
    }

    function __construct() {
      $this->connect();
    }

    function getCollection($collectionName) {
      return $record = $this->db->$collectionName->find();
    }
}
?>