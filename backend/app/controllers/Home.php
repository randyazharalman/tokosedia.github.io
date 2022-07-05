<?php 

class Home extends Controller{
  public function index(){
    $data['title'] = 'Tokosedia';
    // $data['category'] = $this->model('Products_model')->getDataByCategory();
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer', $data);
  }
  public function aboutUs(){
    $data['title'] = 'About Us';

    $this->view('templates/header', $data);
    $this->view('home/about-us', $data);
    $this->view('templates/footer', $data);
  }
}



?>