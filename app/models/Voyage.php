
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
                                 train T WHERE V.t_id=T.ID 
                                   ORDER BY V.v_time DESC;');

           return  $this->db->resultSet();
       }

       public function addVoyage($data){

          $this->db->query('INSERT INTO voyage(departStation,arriveStation,v_date,v_time,t_id)
                                 VALUES(:depart, :arrive, :date, :time, :t_id)');
           $this->db->bind(':depart', $data['departStation']);
           $this->db->bind(':arrive', $data['arriveStation']);
           $this->db->bind(':date', $data['date']);
           $this->db->bind(':time', $data['time']);
           $this->db->bind(':t_id', $data['id']);

           if ($this->db->execute()){
               return true;
           }else{ return false; }


       }
   }
