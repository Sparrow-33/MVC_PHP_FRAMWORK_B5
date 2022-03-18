<?php
  class Dashboard extends Controller{

      public function __construct(){
          if (!isLoggedIn()){
              redirect(('users/login'));
          }

          $this->voyageModel = $this->model('Voyage');
          $this->userModel = $this->model('User');
          $this->trainmodel = $this->model('Trains');
          $this->reserveModel = $this->model('Reservation');
      }
      public function index(){
          $clients = $this->userModel->countUser();
          $trains = $this->trainmodel->trainsCount();
          $reserve = $this->reserveModel->reserveCount();
          $voyages = $this->voyageModel->countVoyages();
          $data = [
              "num" => $clients,
              'trains' =>$trains,
              'reserve' =>$reserve,
              'voyage' =>$voyages

          ];
          $this->view('admin/index', $data);
          require APPROOT."/views/admin/statistics.php";

      }

      public function voyage(){
          $this->voyageModel = $this->model('Voyage');
          $voyages = $this->voyageModel->getAllVoyages();
          $data = [
              'trips' => $voyages
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

             if ($this->voyageModel->addVoyage($data))  {
                 redirect('dashboard');
                 flash('addVoyage', 'Trip added successfully');
             } else{ return  false;}

             }


          }


      function cancelVoyages($id)
      {
          $this->voyageModel = $this->model('Voyage');
          if ($this->voyageModel->cancelVoyage($id)) {
              redirect('dashboard');
          } else {
              return false;
          }

      }
  }
