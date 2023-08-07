<?php
   session_start();

class HomeController {
  private $model;


  public function mostrarHome() {
      require_once 'view/Home/Home.php';
  }
}
