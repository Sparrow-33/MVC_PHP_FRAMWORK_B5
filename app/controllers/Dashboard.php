<?php
  class Dashboard extends Controller{

      public function index(){
          $data = [];
          $this->view('admin/index');

      }



  }
