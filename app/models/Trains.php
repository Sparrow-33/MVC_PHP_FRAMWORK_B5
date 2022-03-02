<?php
 class Trains{
     private $db;
     public function __construct(){
         $this->db = new Database();
     }

     public function addTrainModel($data){
         $this->db->query('INSERT INTO train (t_name, places) VALUES (:t_name, :places)');
         $this->db->bind(':t_name',$data['name']);
         $this->db->bind(':places',$data['seats']);

         if ($this->db->execute()){
             return true;
         }else{ return false; }
     }

     public function getTrains(){
         $this->db->query('SELECT * FROM train' );

       return  $this->db->resultSet();

     }
 }
