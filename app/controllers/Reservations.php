<?php
    class Reservations extends Controller{
        public function __construct(){
            if(!isLoggedIn()){
                redirect('users/login');
            }
            $this->reserveModel = $this->model('Reservation');
        }

        function index(){
           echo "index";
        }

        function reserve(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'id' => $_POST['submit']
            ];




            }
        }
    }