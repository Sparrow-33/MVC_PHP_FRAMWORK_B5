<?php
     class Train extends Controller{

         public function __construct()
         {
             if (!isLoggedIn()){
                 redirect('users/login');
             }

             $this->trainModel = $this->model('Trains');
         }

         public function addTrain(){

             if($_SERVER['REQUEST_METHOD'] == 'POST'){

                 $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

                 $data = [
                     'name' => trim($_POST['tName']),
                     'seats' => trim($_POST['seats']),
                     'name_err' => '',
                     'seats_err' => ''
                 ];
                 if (empty($data['name'])){
                     $data['name_err'] = 'Please enter Train Name';
                 }
                 if (empty($data['seats'])){
                     $data['seats_err'] = 'Please enter Seats';
                 }
                 if(empty($date['name_err']) && empty($date['seats_err'])){

                     if ($this->trainModel->addTrainModel($data)){
                         flash('message_success','You Just added a Train');
                         redirect('/admin/index');
                     }else{ die('Something went wrong');}
                 }else{

                     $this->view('/admin/voyage');
                 }



             }
         }
     }