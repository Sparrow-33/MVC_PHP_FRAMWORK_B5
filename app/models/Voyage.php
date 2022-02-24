<?php
   class Voyage{
       private $db;

       public function __construct(){
           $this->db = new Database;
       }

       public function getVoyage(){
           $this->db->query('SELECT * FROM voyage');
           return  $this->db->resultSet();
       }
   }
