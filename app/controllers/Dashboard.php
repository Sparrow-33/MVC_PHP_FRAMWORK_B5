<?php
  class Dashboard extends Controller{

      public function __construct(){
          if (!isLoggedIn()){
              redirect(('users/login'));
          }
      }
      public function index(){
          $data = [];
          $this->view('admin/index', $data);
          require APPROOT."/views/admin/statistics.php";

      }

      public function voyage(){
          $this->voyageModel = $this->model('Voyage');
          $voyages = $this->voyageModel->getVoyage();
          $data = [
              'trip' => $voyages
          ];
          $this->view('admin/index', $data);
          include APPROOT."/views/admin/voyage.php";
      }

      public function displayUsers(){
          $this->userModel = $this->model('User');
          $user = $this->userModel->getUsersInfo();
          $data = [
              'user' => $user
          ];
          $this->view('admin/index', $data);
          include APPROOT."/views/admin/users.php";
      }

      public function addVoyage(){


          if($_SERVER['REQUEST_METHOD'] == 'POST') {
              //SANITIZE POST data
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
              $this->voyageModel = $this->model('Voyage');

              $data = [
                  'departStation' => trim($_POST['departStation']),
                  'arriveStation' => trim($_POST['arriveStation']),
                  'date' => $_POST['date'],
                  'id' => $_POST['id'],
                  'time' =>$_POST['time'],
              ];

              $this->voyageModel->addVoyage($data);


          }
      }
  }
