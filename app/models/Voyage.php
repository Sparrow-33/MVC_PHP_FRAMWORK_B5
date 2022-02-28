<?php
   class Voyage{
       private $db;

       public function __construct(){
           $this->db = new Database;
       }

       public function getVoyage(){
           $this->db->query('SELECT V.arriveStation,
                                 V.departStation,
                                 V.v_date,
                                   V.V_ID,
                                   V.v_time,
                                   T.places,
                                   T.t_name FROM voyage V,
                                   train T WHERE V.V_ID=T.ID 
                                   ORDER BY V.v_time DESC;');

           return  $this->db->resultSet();
       }
   }
