<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => 'YouExpress',
         'description' => 'Simple train ticket reservation system  built on TravBrad MVC PHP framework'
      ];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
          'description' => 'Im currently learning to work with MVC'
         ];
      $this->view('pages/about',$data);
    }



  }