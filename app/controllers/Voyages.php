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


    }
