<?php
    class Reservations extends Controller{
        public function __construct(){
            if(!isLoggedIn()){
                redirect('users/login');
            }
            $this->reserveModel = $this->model('Reservation');
            $this->userModel = $this->model('User');
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
           $name = $this->userModel->findNameByid($id);
           $data = [
               "trips" => $result,
               'name'=> $name
           ];
           $this->view('pages/reservedTrip', $data);

        }

        function cancelReserve()
        {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if (array_key_exists('cancel', $_POST)) {
                    if ($this->reserveModel->cancelReservation($_POST['cancel'])) {
                        //  echo $this->reserveModel->getVoyageId($_POST['cancel']);
                        redirect('pages/index');
                        flash('register_success', 'trip canceled');
                    } else {
                        redirect('pages/index');
                        flash('cant_cancel', ' Too Late to cancel', 'alert alert-danger');
                    }


                } else {
                    $this->reserveModel->getBackReservation($_POST['reserve']);
                    redirect('pages/index');
                    flash('register_success', 'Reservation back');
                }

            }
        }




}