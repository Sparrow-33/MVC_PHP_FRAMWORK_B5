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
                'ID' => $_POST['submit'],
                'UID' => $_SESSION['user_id']
            ];

            $this->reserveModel->ReserveTrip($data);

            }
        }

        function MyReservation($id){

           $result = $this->reserveModel->GetReservedTrip($id);
           $data = [
               "trips" => $result
           ];
           $this->view('pages/reservedTrip', $data);

        }
}