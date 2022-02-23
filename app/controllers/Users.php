<?php
  class Users extends Controller{
      public function __construct(){
          $this->userModel = $this->model('User');

      }
      public function index(){
          $data = [
              'title' => 'YouExpress',
              'description' => 'Simple train ticket reservation system  built on TravBrad MVC PHP framework'
          ];

          $this->view('pages/index', $data);
      }



      public function register(){
          //Check for Post
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
              //process form

              //SANITIZE POST data
              $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

              //init data
              $data = [
                  'name' => trim($_POST['name']),
                  'email' => trim($_POST['email']),
                  'password' => trim($_POST['password']),
                  'confirm_password' => trim($_POST['confirm_password']),
                  'name_err' => '',
                  'email_err' => '',
                  'password_err' => '',
                  'confirm_password_err' => ''
              ];

              // Validate name & email & pwd
              if (empty($data['email'])){
               $data['email_err'] = 'Please enter Email';
              } else{
              //check email
              if ($this->userModel->findUserByEmail($data['email'])){
                  $data['email_err'] = 'Email already Token';
              }
              }



              if (empty($data['name'])){
                  $data['name_err'] = 'Please enter Name';
              }
              if (empty($data['password'])){
                  $data['password_err'] = 'Please enter password';
              }elseif (strlen($data['password']) < 6){
                  $data['password_err'] = 'Password must be at least 6 characters';
              }
              if (empty($data['confirm_password'])){
                  $data['confirm_password_err'] = 'Please confirm password';
              }elseif ($data['password'] != $data['confirm_password']){
                  $data['confirm_password_err'] = 'Password do not match';
              }

              //empty errors
              if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){

                  //validate
                  //die("SUCCESS YOHOHOOHOHOHOHO");

                  //hash pwd
                  $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
                  // let's register
                  if ($this->userModel->register($data))
                  {
                    flash('register_success','You are now registered You cen login');
                    redirect('users/login');
                  }else{ die('Something went wrong !');}
              }else{
                  //load errors
                  $this->view('users/register',$data);
              }



          }else{
              //init data
           $data = [
               'name' => '',
               'email' => '',
               'password' => '',
               'confirm_password' => '',
               'name_err' => '',
               'email_err' => '',
               'password_err' => '',
               'confirm_password_err' => ''
           ];



           // load view
              $this->view('users/register',$data);

          }
      }


      public function login()
      {
          //Check for Post
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              //process form
              //SANITIZE POST data
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              //init data
              $data = [
                  'email' => trim($_POST['email']),
                  'password' => trim($_POST['password']),
                  'email_err' => '',
                  'password_err' => '',
              ];

              // Validate name & email & pwd
              if (empty($data['email'])) {
                  $data['email_err'] = 'Please enter Email';

              }


              if (empty($data['password'])) {
                  $data['password_err'] = 'Please enter password';
              }
              //check for user & email
              if ($this->userModel->findUserByEmail($data['email'])) {
                  //found
              } else {
                  //not found
                  $data['email_err'] = 'no such user ';
              }

              //empty errors
              if (empty($data['email_err']) && empty($data['password_err'])) {

                  //validate
                  //check ans set user logins
                  $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                  if ($loggedInUser) {
                      //create Session
                      //   die('LOGGED IN , IT ALL WORKED THAANK GOD');
                      $this->createUserSession($loggedInUser);
                  } else {
                      $data['password_err'] = 'Password incorrect';
                      $this->view('users/login', $data);
                  }
              } else {
                  //load errors
                  $this->view('users/login', $data);
              }


          } else {
              //init data
              $data = [
                  'name' => '',
                  'email' => '',
                  'password' => '',
                  'name_err' => '',
                  'email_err' => '',
                  'password_err' => '',
              ];

              // load view
              $this->view('users/login', $data);

          }
      }
          public function createUserSession($user){
              $_SESSION['user_id'] = $user->ID;
              $_SESSION['user_email'] = $user->email;
              $_SESSION['user_name'] = $user->fullName;
              if ($user->STATUS){
                  redirect('dashboard');
              }else{redirect('posts');}

          }

          public function logout(){
             unset($_SESSION['user_id']) ;
             unset($_SESSION['user_email']) ;
             unset($_SESSION['user_name']) ;

             session_destroy();
             redirect('users/login');
          }

          public function isLoggedIn(){
          if (isset($_SESSION['user_id'])){
              return true;
          }else { return false;}
          }
  }
