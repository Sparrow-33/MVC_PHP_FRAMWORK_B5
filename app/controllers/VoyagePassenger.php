<?php
     class VoyagePassenger extends Controller{

         public function searchVoyage(){
             $this->voyageModel = $this->model('Voyage');
             $result =   $this->voyageModel->getVoyage();
             $data = [
                 'trip' => $result
             ];
             $this->view('pages/index',$data);
             include APPROOT."/views/pages/voyage.php";

         }
     }
