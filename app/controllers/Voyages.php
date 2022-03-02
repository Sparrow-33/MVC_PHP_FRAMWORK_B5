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


    }
