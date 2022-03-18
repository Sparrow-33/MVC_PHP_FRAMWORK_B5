<?php
     class VoyagePassenger extends Controller{

         public function searchVoyage()
         {

             if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                 $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                 $data = [
                     'arrive' => strtolower(trim($_POST['arriveStation'])) ,
                     'depart' => strtolower(trim($_POST['departStation'])) ,
                     'arrive_err' => '',
                     'depart_err' => ''
                 ];

                 if (empty($data['depart'])) {
                     $data['depart_err'] = 'Please enter Depart station';

                 }

                 if (empty($data['arrive'])) {
                     $data['arrive_err'] = 'Please enter Arrive station';

                 }
                 if (empty($data['email_err']) && empty($data['password_err'])) {

                     $this->voyageModel = $this->model('Voyage');
                     $result = $this->voyageModel->getVoyage($data['depart'] ,$data['arrive']);

                     $data = [
                         'trip' => $result
                     ];
                     $this->view('pages/index', $data);
                     include APPROOT . "/views/pages/voyage.php";

                 }



             }
         }
     }
