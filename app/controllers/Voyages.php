<?php

    class Voyages extends Controller{

        public function __construct(){
            if (!isLoggedIn()){
                redirect('users/login');
            }
            $this->voyageModel = $this->model('Voyage');
      }

      public function index(){
            $voyages = $this->voyageModel->getVoyage();
            $data = [
                'trip' => $voyages
            ];
            $this->view('admin/voyage', $data);
        }

        public function addingVoyage(){

            $this->trainModel = $this->model('Trains');
            $train = $this->trainModel->getTrains();
            $data = [
                'train'=> $train
            ];
            $this->view('admin/index', $data);
            include APPROOT."/views/admin/addVoyage.php";
        }

        public function editVoyage(){

            echo "heere";

        }

      function update(){
            if ($_SERVER['REQUEST_METHOD'] = 'POST'){
                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

                //init data
                $data = [
                    'id' => trim($_POST['submit']),
                    'depart' => trim($_POST['departStation']),
                    'arrive' => trim($_POST['arriveStation']),
                    'date' => trim($_POST['date']),
                    'time' => trim($_POST['time'])
                ];

                if ($this->voyageModel->editVoyageInfo($data)){

                    redirect('dashboard');
                    flash('success_update','Trip Updated Successfully');
                }

            }
      }

    }
