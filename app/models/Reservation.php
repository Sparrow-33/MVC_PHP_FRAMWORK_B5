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
                                   R.RID ,
                                   R.STATUS as RSTATUS,
                                   V.departStation,
                                   V.arriveStation,
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

         function cancelReservation($id){

             $VID = $this->getVoyageId($id);
             $VTIME = $this->getVoyageTime($VID->VID);
             $VTIME = explode(":",$VTIME->v_time);
             if ((date('h') -$VTIME[0]) < 1) {
                 return false;
             }else{
                 $this->db->query('UPDATE reservation
                                   SET
                                          STATUS = 0
                                   WHERE RID = :id');
                 $this->db->bind(':id', $id);

                 if ($this->db->execute()){
                     return true;
                 }else{ return false;}
             }



         }

         function getBackReservation($id){

             $this->db->query('UPDATE reservation
                                   SET
                                          STATUS = 1
                                   WHERE RID = :id');
             $this->db->bind(':id', $id);

             if ($this->db->execute()){
                 return true;
             }else{ return false;}

         }

         function getVoyageId($id){
              $this->db->query('SELECT 
                                      VID
                                    FROM
                                      reservation
                                    WHERE RID = :id
                                ');
              $this->db->bind(':id', $id);
       return $this->db->single();

         }

         function getVoyageTime($id){
             $this->db->query('SELECT
                                       v_time
                                    FROM
                                       voyage
                                    WHERE V_ID = :id');
             $this->db->bind(':id', $id);
           return  $this->db->single();
         }

         function reserveCount(){
             $this->db->query('SELECT * FROM reservation WHERE STATUS = 1');
             $this->db->execute();
             $num =$this->db->rowCount();
             if ($num > 0){
                 return $num;
             }else{ return 0;
             }
         }
     }
