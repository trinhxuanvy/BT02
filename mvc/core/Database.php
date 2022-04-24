<?php
require('vendor/autoload.php');
class Database { 
    private $db;

    private function connect () {
      $connection = new MongoDB\Client("mongodb+srv://trinhxuanvy:vychuoi123@cluster0.ui5zr.mongodb.net/gofood?retryWrites=true&w=majority");
      $this->db = $connection->gofood;
    }

    function __construct() {
      $this->connect();
    }

    function getCollection($collectionName) {
      return $record = $this->db->$collectionName->find();
    }
}
?>