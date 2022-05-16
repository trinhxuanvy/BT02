<?php
class Home extends Controller {
  function index() {
    $clubModel = $this->model("ClubModel");
    $playerModel = $this->model("PlayerModel");
    $clubs = $clubModel->getClub();
    $players = $playerModel->getPlayer();
    $this->view("index", ["clubs"=>$clubs, "players"=>$players]);
  }

  function show() {

  }
}
?>