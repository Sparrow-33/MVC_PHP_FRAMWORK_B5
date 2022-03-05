<?php
     class Reservation{
         private $db;

         public function __construct(){
             $this->db = new Database();
         }

         function ReserveTrip($data){
             $this->db->query('INSERT INTO reservation(VID,PID) VALUES 
                                    (:VID,:PID)');
             $this->db->bind(':VID',$data['ID']);
             $this->db->bind(':PID',$data['UID']);

             if ($this->db->execute()){
                 return true;
             }else{ return false;}

         }

         function GetReservedTrip($id){
          /*   $this->db->query('SELECT V.arriveStation,
                                 V.departStation,
                                 V.v_date,
                                 V.V_ID,
                                 V.v_time,
                                 V.STATUS,
                                 T.places,
                                 T.t_name FROM voyage V,
                                 train T ,
                                 reservation R,       
                                 WHERE V.t_id=T.ID AND R.VID = V.V_ID AND R.PID = :PID
                                 ORDER BY V.v_time DESC;'); */

             $this->db->query('SELECT R.PID,
                                   R.VID,
                                   V.departStation,
                                   V.v_date,
                                   V.V_ID,
                                   V.v_time,
                                   V.STATUS,
                                   T.places,
                                   T.t_name FROM reservation R,
                                   train T,
                                   voyage V
                                   WHERE V.t_id = T.ID AND R.VID = V.V_ID AND R.PID = :PID;');



             $this->db->bind(':PID',$id);
             return $this->db->resultSet();
         }
     }
