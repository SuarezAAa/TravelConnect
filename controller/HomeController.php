<?php
   session_start();

class HomeController {
  private $model;

   /* public function __construct() {
        $this->model = new HomeModel();
    }*/

  public function mostrarHome() {
      require_once 'view/Home/Home.php';
  }
}
