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
 }


