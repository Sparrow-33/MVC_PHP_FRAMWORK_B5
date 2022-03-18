<?php
 class User {
     private $db;

     public function  __construct(){
         $this->db = new Database;
     }
     //Registration
     public function register($data){
         $this->db->query('INSERT INTO sys_user (fullName, email, pwd) VALUES (:name, :email, :password)');

         $this->db->bind(':name',$data['name']);
         $this->db->bind(':email',$data['email']);
         $this->db->bind(':password',$data['password']);


         //execute
         if ($this->db->execute()){
             return true;
         }else{ return false; }
     }

     //Login User
     public function login($email,$password){
         $this->db->query('SELECT * FROM sys_user WHERE email = :email');
         $this->db->bind(':email',$email);

         $row = $this->db->single();

         $hashed_password = $row->pwd;
         if (password_verify($password, $hashed_password)){
             return $row;
         }else{ return false;}
     }

     //find email
     public  function findUserByEmail($email){
         $this->db->query('SELECT * FROM sys_user WHERE email = :email');
         $this->db->bind(':email',$email);

         $row = $this->db->single();

         //check row
         if ($this->db->rowCount() > 0){
             return true;
         }else{
             return false;
         }
     }

     //find & display users info
     public function getUsersInfo(){
         $this->db->query('SELECT * FROM sys_user WHERE STATUS = 0');
         $row = $this->db->resultSet();

         //checking
         if ($this->db->rowCount() > 0){
             return $row;
         }else{
             return false;
         }

     }

     public function getSingleUserInfo($id){
         $this->db->query('SELECT * FROM sys_user WHERE STATUS = 0 AND ID = :id');
         $this->db->bind(':id',$id);
         $row = $this->db->single();

         if ($this->db->rowCount() > 0){
             return $row;
         }else{
             return false;
         }
     }

     function findNameById($id){
         $this->db->query('SELECT fullName FROM sys_user WHERE ID = :id');
         $this->db->bind(':id', $id);
         $row = $this->db->single();
         if ($this->db->rowCount() > 0){
             return $row;
         }else{ return false;}
     }

     function editUserProfiles($id,$data){
            $this->db->query('UPDATE sys_user
                                     SET
                                        fullName = :name,
                                        email = :email,
                                        phone = :phone,
                                        address = :address  WHERE ID = :id');
         $this->db->bind(':id', $id);
         $this->db->bind(':name', $data['name']);
         $this->db->bind(':email', $_POST['email']);
         $this->db->bind(':phone', $_POST['phone']);
         $this->db->bind(':address', $_POST['address']);

         if ($this->db->execute()){
             return true;
         }else{ return false;}

     }   function countUser(){

         $this->db->query('SELECT * FROM sys_user WHERE STATUS = 0');
         $this->db->execute();
         $num =$this->db->rowCount();
         if ($num > 0){
             return $num;
         }else{ return 0;
         }
      }
 }


